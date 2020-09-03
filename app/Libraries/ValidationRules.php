<?php

namespace App\Libraries;

class ValidationRules {

    protected $userFormAdmin = [
        'username' => [
            'rules'  => 'required|min_length[3]',
            'errors' => [
                'required' => 'Please enter a username.',
                'min_length' => 'Please enter a valid username.'
            ]
        ],
        'first_name' => [
            'rules'  => 'required|min_length[3]|alpha',
            'errors' => [
                'required' => 'Please enter a first name.',
                'min_length' => 'Please enter a valid first name.'
            ]
        ],
        'last_name' => [
            'rules'  => 'required|min_length[3]|alpha',
            'errors' => [
                'required' => 'Please enter a last name.',
                'min_length' => 'Please enter a valid last name.'
            ]
        ],
        'email' => [
            'rules'  => 'required|min_length[3]|valid_email',
            'errors' => [
                'required' => 'Please enter a email address.',
                'valid_email' => 'Please enter a valid email address.'
            ]
        ],
        'contact_number' => [
            'rules'  => 'required|min_length[10]|is_natural',
            'errors' => [
                'required' => 'Please enter a contact number.',
                'min_length' => 'Please enter a valid contact number.'
            ]
        ],
        'password' => [
            'rules'  => 'required_without[user_id]',
            'errors' => [
                'required' => 'Please enter a password.',
            ]
        ],
        'confirm_password' => [
            'rules'  => 'required_without[user_id]|matches[password]',
            'errors' => [
                'required' => 'Please enter a password.',
                'matches' => "Doesn't match with the password"
            ]
        ],
        'status' => [
            'rules'  => 'required|in_list[1,2]|is_natural',
            'errors' => [
                'required' => 'Please select an status type.',
                'in_list' => 'Please select an status type.'
            ]
        ]
    ];

    protected $categoryFormAdmin = [
        'category_name' => [
            'rules'  => 'required|min_length[3]',
            'errors' => [
                'required' => 'Please enter a category name.',
                'min_length' => 'Please enter a valid category name.'
            ]
        ],
        'category_description' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'Please enter a description.'
            ]
        ],
        'status' => [
            'rules'  => 'required|in_list[1,2]|is_natural',
            'errors' => [
                'required' => 'Please select an status type.',
                'in_list' => 'Please select an status type.'
            ]
        ]
    ];

    protected $keywordFormAdmin = [
        'keyword' => [
            'rules'  => 'required|min_length[3]',
            'errors' => [
                'required' => 'Please enter a valid keyword.',
            ]
        ],
    ];

    protected $postFormAdmin = [
        'title' => [
            'rules'  => 'required|min_length[3]',
            'errors' => [
                'required' => 'Please enter a valid title.',
            ]
        ],
        'content' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'Please enter content for the post',
            ]
        ],
        'published_status' => [
            'rules'  => 'required|in_list[1,2]|is_natural',
            'errors' => [
                'required' => 'Please select an publish status.',
                'in_list' => 'Please select an publish status.'
            ]
        ]
    ];

    protected $adminLoginForm = [
        'username' => [
            'rules'  => 'required|min_length[3]',
            'errors' => [
                'required' => 'Please enter a username.',
                'min_length' => 'Please enter a valid username.'
            ]
        ],
        'password'    => [
            'rules'  => 'required|min_length[8]',
            'errors' => [
                'required' => 'Please enter a password.',
                'min_length' => 'Password should have a minimum of 8 characters.'
            ]
        ],
    ];

    public function getRules($rulesFor) {
        return $this->$rulesFor;
    }
}