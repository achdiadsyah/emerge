<?php

namespace App\Http\Controllers\Investor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        $data=array(
            'title' => 'Investor Login Page'
        );
        return view('Investor.login', $data);
    }

    public function investorDetail(Request $request, $page){
        $data=array(
            'title' => 'Investor Detail'
        );
        switch ($page) {
            case '1':
                $view = "Investor.investor-detail-1";
                break;
            case '2':
                $view = "Investor.investor-detail-2";
                break;
            case '3':
                $view = "Investor.investor-detail-3";
                break;
            case '4':
                $view = "Investor.investor-detail-4";
                break;
            default:
                $view = "Investor.investor-detail-1";
                break;
        }
        return view($view, $data);
    }

    public function update(Request $request, $page)
    {
        switch ($page) {
            case '1':
                return $this->update_step_1($request);
                break;
            case '2':
                return $this->update_step_2($request);
                break;
            case '3':
                return $this->update_step_3($request);
                break;
            case '4':
                return $this->update_step_4($request);
                break;
        }
    }

    protected function update_step_1(Request $request){
        $validated = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'country' => ['required'],
            'id_card_number' => ['required', 'string'],
            'passport_number' => ['required','string'],
        ]);

        if ($validated->fails()) {
            return redirect()->route('investor.detail', '1')
                ->withErrors($validated)
                ->withInput();
        }
        
        return redirect()->route('investor.detail', '2');
    }
    protected function update_step_2(Request $request){
        $validated = Validator::make($request->all(), [
            'province' => ['required'],
            'city' => ['required', 'string'],
            'full_address' => ['required', 'string'],
        ]);

        if ($validated->fails()) {
            return redirect()->route('investor.detail', '2')
                ->withErrors($validated)
                ->withInput();
        }
        
        return redirect()->route('investor.detail', '3');
    }
    protected function update_step_3(Request $request){
        $validated = Validator::make($request->all(), [
            'investing_as_individual' => ['required'],
            'annual_income_range' => ['required'],
            'expected_annual_investation' => ['required'],
            'expected_annual_investation' => ['required'],
        ]);

        if ($validated->fails()) {
            return redirect()->route('investor.detail', '2')
                ->withErrors($validated)
                ->withInput();
        }
        
        return redirect()->route('investor.detail', '4');
    }
    protected function update_step_4(Request $request){
        // TODO: recap 
    }
}

