<?php

return [
    'validation' => [
        'aadhaar' => 'The :attribute must be a valid 12-digit Aadhaar number.',
        'domain_name' => 'The :attribute must be a valid domain name (e.g., example.com).',
        'driving_license' => 'The :attribute is not a valid Driving License number.',
        'email_domain' => 'The :attribute must be a valid email with one of the allowed domains.',
        'gst_number' => 'The :attribute is not a valid GST number.',
        'ifsc_code' => 'The :attribute is not a valid IFSC code.',
        'indian_phone_number' => 'The :attribute must be a valid Indian phone number.',
        'indian_vehicle_number' => 'The :attribute must be a valid Indian vehicle registration number.',
        'pan_number_length' => 'The :attribute must be exactly 10 characters.',
        'pan_number' => 'The :attribute is not a valid PAN number.',
        'passport_number' => 'The :attribute is not a valid Indian passport number.',
        'pincode' => 'The :attribute must be a valid 6-digit Indian PIN code.',
        'sub_domain_reserved' => 'The :attribute cannot be a reserved subdomain (e.g., www, admin, mail).',
        'sub_domain_length' => 'The :attribute must be between 1 and 63 characters.',
        'sub_domain_invalid' => 'The :attribute must contain only lowercase letters, numbers, and hyphens, without leading or trailing hyphens.',
        'verify_current_password' => 'The current password does not match.',
        'voter_id' => 'The :attribute is not a valid Voter ID.',
        'latlong_numeric' => 'The :attribute must be a valid numeric value.',
        'latlong_format' => 'The :attribute format is invalid. It must have up to 8 decimal places.',
        'latitude_range' => 'The :attribute must be between -90 and 90.',
        'longitude_range' => 'The :attribute must be between -180 and 180.',
        
    ],
];
