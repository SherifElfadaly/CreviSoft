<?php namespace App\Modules\Crevisoft\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'user_name'     => 'required|max:50|alpha_dash',
			'email_content' => 'required',
			'user_email'    => 'required|max:100|email',
		];
	}

}
