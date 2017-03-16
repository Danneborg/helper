<?php

return array(
    'staff/([0-9]+)' => 'staff/view/$1', //actionView в StaffController
    'startpage' => 'startpage/index', //actionIndex в StartpageController
    'instructions/addinstruction' => 'instructions/addinstr', //actionAddinstr в InstructionsController
    'instructions/show' => 'instructions/show', //
    'instructions' => 'instructions/index', //actionIndex в InstructionsController
    'worker/show' => 'worker/show', //actionShow в WorkerController
    'worker' => 'worker/index', //actionIndex в WorkerController
    'staff' => 'staff/index', //actionIndex в StaffController
    '' => 'startpage/index', //actionIndex в StartpageController
);
