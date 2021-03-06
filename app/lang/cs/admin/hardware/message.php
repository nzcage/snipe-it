<?php

return array(

    'undeployable' 		=> '<strong>Varování:</strong> Toto zařízení bylo označeno jako momentálně nepřiřaditelné.
                        Pokud se na jeho stavu něco změnilo, upravte jej.',
    'does_not_exist' 	=> 'Asset does not exist.',
    'does_not_exist_or_not_requestable' => 'Nice try. That asset does not exist or is not requestable.',
    'assoc_users'	 	=> 'This asset is currently checked out to a user and cannot be deleted. Please check the asset in first, and then try deleting again. ',

    'create' => array(
        'error'   		=> 'Asset was not created, please try again. :(',
        'success' 		=> 'Asset created successfully. :)'
    ),

    'update' => array(
        'error'   			=> 'Asset was not updated, please try again',
        'success' 			=> 'Majetek úspěšně aktualizován.',
        'nothing_updated'	=>  'No fields were selected, so nothing was updated.',
    ),

    'restore' => array(
        'error'   		=> 'Asset was not restored, please try again',
        'success' 		=> 'Asset restored successfully.'
    ),

    'deletefile' => array(
        'error'   => 'File not deleted. Please try again.',
        'success' => 'Soubor byl úspěšně smazán.',
    ),

    'upload' => array(
        'error'   => 'File(s) not uploaded. Please try again.',
        'success' => 'File(s) successfully uploaded.',
        'nofiles' => 'You did not select any files for upload, or the file you are trying to upload is too large',
        'invalidfiles' => 'One or more of your files is too large or is a filetype that is not allowed. Allowed filetypes are png, gif, jpg, doc, docx, pdf, and txt.',
    ),

    'import' => array(
        'error'         => 'Some Items did not import Correctly.',
        'errorDetail'   => 'The Following Items were not imported because of errors.',
        'success'       => "Your File has been imported",
    ),


    'delete' => array(
        'confirm'   	=> 'Are you sure you wish to delete this asset?',
        'error'   		=> 'There was an issue deleting the asset. Please try again.',
        'success' 		=> 'Majetek byl úspěšně smazán.'
    ),

    'checkout' => array(
        'error'   		=> 'Asset was not checked out, please try again',
        'success' 		=> 'Asset checked out successfully.',
        'user_does_not_exist' => 'That user is invalid. Please try again.'
    ),

    'checkin' => array(
        'error'   		=> 'Asset was not checked in, please try again',
        'success' 		=> 'Asset checked in successfully.',
        'user_does_not_exist' => 'That user is invalid. Please try again.',
        'already_checked_in'  => 'That asset is already checked in.',

    ),

    'requests' => array(
        'error'   		=> 'Asset was not requested, please try again',
        'success' 		=> 'Asset requested successfully.',
    )

);
