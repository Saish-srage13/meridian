<?php

namespace App\Libraries;

class ValidationRules {

    protected $connectFromFront = [
        'name' => [
            'rules'  => 'required|min_length[3]',
            'errors' => [
                'required' => 'Please enter a name.',
                'min_length' => 'Please enter a valid name.'
            ]
        ],
        'email' => [
            'rules'  => 'required|min_length[3]|valid_email',
            'errors' => [
                'required' => 'Please enter a email address.',
                'valid_email' => 'Please enter a valid email address.'
            ]
        ],
        'phone' => [
            'rules'  => 'required|min_length[10]|is_natural',
            'errors' => [
                'required' => 'Please enter a contact number.',
                'min_length' => 'Please enter a valid contact number.'
            ]
        ],
        'subject' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'Please enter a subject.'
            ]
        ],
        'message' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'Please enter a message'
            ]
        ]
    ];

    public function getRules($rulesFor) {
        return $this->$rulesFor;
    }
}