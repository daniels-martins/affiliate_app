<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
   /**
    * Get the validation rules that apply to the request.
    *
    * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
    */
   public function rules(): array
   {
      return [
         // '*name' => ['nullable', 'min:4'], //pls note that this '*' doesn't affect any input with the name : 'name', that's why i reset it in d next line.
         'name' => ['string', 'max:20'],
         'email' => ['email', 'max:50', Rule::unique(User::class)->ignore($this->user()->id)],
         'fname' => 'nullable|min:4',
         'lname' => 'nullable|min:4',
         'gender' => 'nullable',
         'address' => 'nullable|min:4',
         'city' => 'nullable|min:4',
         'country' => 'nullable|min:4',
         'postcode' => 'nullable|min:4',
         'about_me' => 'nullable|min:4',

         // bank information 
         'bank_name' => 'nullable|min:3',
         'bank_account_name'  => 'nullable|min:3',
         'bank_account_num'  => 'nullable|min:3',
      ];
   }


   public function messages()
   {
      return [
         'fname.min' => "The first name field must be at least 4 characters.",
         'lname.min' => "The last name field must be at least 4 characters."
      ];
   }
   public function prepareForValidation()
   {
      // $this->merge([
      //    'fname' => $this->fname
      // ]);
   }
}
