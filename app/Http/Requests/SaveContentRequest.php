<?php

namespace Seia\Core\Http\Requests;

use Seia\Core\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class SaveContentRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = Auth::user();
        return (!empty($user));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = Auth::user();
        $this->request->add(['created_by' => $user->id]);

        $rules = [
            'content_type_id' => ['required'],
            'language_id' => ['required'],
            'mime_type' => ['required'],
            'title' => ['required'],
            'body' => ['required'],
            'status' => ['required'],
        ];

        $removeWhenNull = ['category_id', 'refers_to', 'parent_id', 'release_at', 'expire_at', 'summary', 'media'];

        foreach ($removeWhenNull as $k) {
            if (empty($this->$k)) {
                $this->request->remove($k);
            }
        }

        return $rules;
    }
}
