<?php

return array(
    'staff/([0-9]+)' => 'staff/view/$1', //actionView в StaffController
    'staff/fill' => 'staff/fill',
    'staff/add' => 'staff/add',
    'staff/update' => 'staff/update',
    'staff/box' => 'staff/box',
    'startpage' => 'startpage/index', //actionIndex в StartpageController
    'instructions/addinstruction' => 'instructions/addinstr', //actionAddinstr в InstructionsController
    'instructions/show' => 'instructions/show', //
    'instructions' => 'instructions/index', //actionIndex в InstructionsController
    'staff' => 'staff/index', //actionIndex в StaffController
    '' => 'startpage/index', //actionIndex в StartpageController
);
