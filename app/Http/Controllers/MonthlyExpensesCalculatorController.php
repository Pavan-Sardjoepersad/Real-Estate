<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class MonthlyExpensesCalculatorController extends Controller
{

    public function showCalculator($id)
    {
        // Haal de property gegevens op
        $property = Property::findOrFail($id);

        // Geef de property gegevens door aan de view
        return view('property.calculator', compact('property'));
    }

    public function calculate(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        // Validatie van de invoer
        $validated = $request->validate([
            'offer' => 'required|numeric',
            'down_payment' => 'required|numeric',
            'house_type' => 'required|string',
            'energy_label' => 'required|string',
        ]);

        $offer = $validated['offer'];
        $downPayment = $validated['down_payment'];
        $houseType = $validated['house_type'];
        $energyLabel = $validated['energy_label'];

        // Hypotheekbedrag berekenen
        $mortgage = $offer - $downPayment;

        // Rentepercentage bepalen (tussen 3.5% en 4.5%)
        $interestRate = rand(35, 45) / 10;

        // Kosten koper (laten we aannemen dat dit 2% van het bod is)
        $closingCosts = $offer * 0.02;

        // Aantal jaren van de hypotheek (bijvoorbeeld 30 jaar)
        $years = 30;

        // Berekening maandelijkse rente en aantal betalingen
        $monthlyInterestRate = ($interestRate / 100) / 12;
        $numberOfPayments = $years * 12;

        // Hypotheek berekening formule
        $monthlyMortgagePayment = $mortgage * $monthlyInterestRate * pow((1 + $monthlyInterestRate), $numberOfPayments) / (pow((1 + $monthlyInterestRate), $numberOfPayments) - 1);

        // Totale maandelijkse lasten (hypotheekbetaling + kosten koper/12 maanden)
        $totalMonthlyExpenses = $monthlyMortgagePayment + ($closingCosts / 12);

        return view('property.calculator', [
            'property' => $property,
            'monthly_mortgage_payment' => round($monthlyMortgagePayment, 2),
            'total_monthly_expenses' => round($totalMonthlyExpenses, 2),
            'mortgage' => round($mortgage, 2),
            'interest_rate' => $interestRate,
            'closing_costs' => round($closingCosts, 2),
        ]);
    }
}
