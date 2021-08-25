<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Validator;
use App\Mail\SendMessage;
use App\Mail\SendRezervare;
use App\Mail\SendApartament;
use App\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Devio\Pipedrive\Pipedrive;

class ContactController extends Controller
{
    
    
    public function index()
    {
      return view('contact');
    }
   public function send_message(Request $request){
 
        $form_data = $request->only(['name','email', 'message','phone','termeni']);
        $validationRules = [
            'name'    => ['required','min:3'],
            'email'   => ['required','email'],
            'message'   => ['required','min:10'],
            'phone'   => ['required','min:10'],
            'termeni'   => ['required'],
          
        ];
      
        $validationMessages = [
            'name.min'   => "Campul nume trebuie sa aiba minim :min caractere",
            'email.email'    => "Trebuie sa introduci o adresa de :attribute valida!",
            'message.min'   => "Campul mesaj trebuie sa aiba minim :min caractere",
            'phone.min'   => "Campul telefon trebuie sa aiba minim :min caractere",
            'name.required'    => "Campul nume este obligatoriu!",
            'email.required'    => "Campul email este obligatoriu!",
            'message.required'    => "Campul message este obligatoriu!",
            'phone.required'    => "Campul telefon este obligatoriu!",
            'termeni.required'    => "Te rugam sa accepti termenii si conditiile!",
        ];
         $validator = Validator::make($form_data, $validationRules);
        if ($validator->fails())
            return ['success' => false, 'error' => $validator->errors()->all()];  
        else{
            // $date_de_salvat = MessageContact::create($request->all()); 
            Mail::to(setting('contact.email'))->send(new SendMessage($request->all()));
  
            return ['success' => true,'successMessage'=>  'Mesajul a fost trimis cu succes!'];
        }     
              
    }
   public function send_rezervare(Request $request){


        $token = config('services.pipedrive.token');
        $form_data = $request->only(['name','email', 'message','phone','termeni','camere']);
        $validationRules = [
            'name'    => ['required','min:3'],
            'email'   => ['required','email'],
            'message'   => ['required','min:10'],
            'phone'   => ['required','min:10'],
            'termeni'   => ['required'],
          
        ];
      
        $validationMessages = [
            'name.min'   => "Campul nume trebuie sa aiba minim :min caractere",
            'email.email'    => "Trebuie sa introduci o adresa de :attribute valida!",
            'message.min'   => "Campul mesaj trebuie sa aiba minim :min caractere",
            'phone.min'   => "Campul telefon trebuie sa aiba minim :min caractere",
            'name.required'    => "Campul nume este obligatoriu!",
            'email.required'    => "Campul email este obligatoriu!",
            'message.required'    => "Campul message este obligatoriu!",
            'phone.required'    => "Campul telefon este obligatoriu!",
            'termeni.required'    => "Te rugam sa accepti termenii si conditiile!",
        ];
         $validator = Validator::make($form_data, $validationRules);
        if ($validator->fails())
            return ['success' => false, 'error' => $validator->errors()->all()];  
        else{
            // $date_de_salvat = MessageContact::create($request->all()); 
            Mail::to(setting('contact.email'))->send(new SendRezervare($request->all()));
            $pipedrive  = new Pipedrive($token);

            $organization = $pipedrive->organizations()->add(['name' =>'Site proiect']);
            $orgId = $organization->getData()->id;
            $person = $pipedrive->persons()->add([
                'name' =>$request['name'],
                'email' =>$request['email'],
                'phone' =>$request['phone'],
                'org_id'=>$orgId,
            ]);
            $personId = $person->getData()->id;
            $deal = $pipedrive->deals()->add([
                'title' =>'Rezervare Opera residence',
                'person_id'=>$personId,
            ]);
            $dealId = $deal->getData()->id;
            $notes = $pipedrive->notes()->add([
                'content'=>'Camere:'.$request['camere'].'<br>'.'Mesaj:'.$request['message'],
                'deal_id'=>$dealId,
            ]);

            return ['success' => true,'successMessage'=>  'Rezervarea a fost trimisa cu succes!'];

            
        }     
              
    }

   public function send_apartament(Request $request){

        $token = config('services.pipedrive.token');
        $form_data = $request->only(['name','email', 'message','phone','termeni']);
        $validationRules = [
            'name'    => ['required','min:3'],
            'email'   => ['required','email'],
            'phone'   => ['required','min:10'],
            'message'   => ['required','min:10'],
            'termeni'   => ['required'],
          
        ];
      
        $validationMessages = [
            'name.min'   => "Campul nume trebuie sa aiba minim :min caractere",
            'email.email'    => "Trebuie sa introduci o adresa de :attribute valida!",
            'message.min'   => "Campul mesaj trebuie sa aiba minim :min caractere",
            'phone.min'   => "Campul telefon trebuie sa aiba minim :min caractere",
            'name.required'    => "Campul nume este obligatoriu!",
            'email.required'    => "Campul email este obligatoriu!",
            'message.required'    => "Campul message este obligatoriu!",
            'phone.required'    => "Campul telefon este obligatoriu!",
            'termeni.required'    => "Te rugam sa accepti termenii si conditiile!",
        ];
         $validator = Validator::make($form_data, $validationRules);
        if ($validator->fails())
            return ['success' => false, 'error' => $validator->errors()->all()];  
        else{
            $date_de_salvat = Message::create($request->all()); 
            Mail::to(setting('contact.email'))->send(new SendApartament($request->all()));
            $pipedrive  = new Pipedrive($token);

             $organization = $pipedrive->organizations()->add(['name' =>'Site proiect']);
            $orgId = $organization->getData()->id;
            $person = $pipedrive->persons()->add([
                'name' =>$request['name'],
                'email' =>$request['email'],
                'phone' =>$request['phone'],
                'org_id'=>$orgId,
            ]);
            $personId = $person->getData()->id;
            $deal = $pipedrive->deals()->add([
                'title' =>'Rezervare apartament Opera Residence',
                'person_id'=>$personId,
            ]);
            $dealId = $deal->getData()->id;
            $notes = $pipedrive->notes()->add([
                'content'=>'Mesaj:'.$request['message'],
                'deal_id'=>$dealId,
            ]);
  
            return ['success' => true,'successMessage'=>  'Rezervarea a fost trimisa cu succes!'];
        }     
              
    }
    
    
}