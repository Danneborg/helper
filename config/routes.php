<?php

return array(
    'staff/([0-9]+)' => 'staff/view/$1', //actionView в StaffController
    'startpage' => 'startpage/index', //actionIndex в StartpageController
    'instructions/addinstruction' => 'addinstruction/index', //actionIndex в AddInstructioController
    'instructions' => 'instructions/index', //actionIndex в InstructionsController
    'worker' => 'worker/index', //actionIndex в WorkerController
    'staff' => 'staff/index', //actionIndex в StaffController
    '' => 'startpage/index', //actionIndex в StartpageController
);
