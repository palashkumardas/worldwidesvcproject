<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReceivedMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => request()->last_name,
            'surname' => request()->surname,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => request()->phone,
            'address' => request()->address,
            'contact_preferences' => request()->check_email.",".request()->check_sms.",".request()->check_phone,
            'country' => request()->country,
            'gender' => request()->gender,
            'date_of_birth' => request()->date_of_birth,
            'country_of_birth' => request()->country_of_birth,
            'nationality' => request()->nationality,
        ]);

        if(request()->hasFile('picture')){
            $picture = request()->file('picture')->getClientOriginalName();
            request()->file('picture')->storeAs('picture',$user->id.'/'.$picture,);
            $user->update(['picture' => $picture]);
        }

         // email data
        $email_data = array(
            'first_name' => $data['first_name'],
            'last_name' => request()->last_name,
            'email' => $data['email'],
            'phone' => request()->phone,
            'address' => request()->address,
            'contact_preferences' => "  ".request()->check_email."  ".request()->check_sms."  ".request()->check_phone." | ",
        );

        // send email with the template
        // Mail::send('welcome_email', $email_data, function ($message) use ($email_data) {
        //     $message->to($email_data['email'], $email_data['name'])
        //         ->subject('Welcome to MyNotePaper')
        //         ->from('info@mynotepaper.com', 'MyNotePaper');
        // });

        Mail::to("sales@worldwidesvc.com")->send(new ReceivedMail($email_data));

        return $user;
    }
}
