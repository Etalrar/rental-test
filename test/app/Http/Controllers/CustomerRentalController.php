<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerRentalController extends Controller
{
    public function info()
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;
        $customers=[];
        $customersData = Customer::select(
            'customers.id', 
            'customers.name', 
            'movies.name as movie_name', 
            'movies_categories.rental_per_day', 
            'movies_categories.rental_extra_days',
            'movies_categories.bonus'
        )
        ->join('rentals', 'customers.id', '=', 'rentals.customers_id')
        ->join('movies', 'rentals.movies_id', '=', 'movies.id')
        ->join('movies_categories', 'movies.movies_categories_id', '=', 'movies_categories.id')
        ->groupBy('customers.id', 'customers.name', 'movies.name', 'movies_categories.rental_per_day', 'movies_categories.rental_extra_days','movies_categories.bonus')
        ->selectRaw('SUM(DATEDIFF(rentals.date_end_rental, rentals.date_begin_rental)) AS totalDays')
        ->get();
        
        foreach($customersData as $value) {
            $customerId = $value['id'];
    
            if (!isset($customers[$customerId])) {
                $customers[$customerId] = [
                    'name' => $value['name'],
                    'rentals' => [],
                    'totalAmount' => 0,
                    'frequentRenterPoints' => 0
                ];
            }
            $movieAmount = $this->calculateRentalAmount($value);
            $rental = [
                'movie' => $value['movie_name'],
                'amount' => $movieAmount
            ];
    
            $customers[$customerId]['rentals'][] = $rental;
    
            $customers[$customerId]['totalAmount'] += $movieAmount;
            $customers[$customerId]['frequentRenterPoints'] += $this->calculateFrequentRenterPoints($value);
        }
    
    
    return view('welcome', ['customers' => $customers]);

    }

    private function calculateRentalAmount($value)
    {
    
        if($value['rental_extra_days'] == null){
            $amount = ($value ['totalDays'] * $value ['rental_per_day']);
        }
        else {
            $amount = $value ['rental_per_day'];
            if($value ['totalDays'] > 2) {
                $amount += ($value ['rental_extra_days']*($value ['totalDays'] - 2));
            }
        }
        return $amount;
    }

    private function calculateFrequentRenterPoints($value)
    {
        if($value['bonus'] == true){
            return 2;
        } else {
            return 1;
        }
    }
    
    
   
}
