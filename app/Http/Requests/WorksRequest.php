<?php

namespace Fiorella\Http\Requests;

use Fiorella\Http\Requests\Request;

class WorksRequest extends Request
{
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
            'title' => 'required',
            'size' => 'required',
            'technique_id' => 'required'
        ];
    }
}
