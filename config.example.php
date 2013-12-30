<?php
/**
* Repositories path is an array of ('repo name'=> 'repo path')
* In this case the repos are in the same folder than the git-pretty-stats
* More flexible than the repositories folder
* Old system still working :
* return array(
*  'repositoriesPath' => 'repositories'
* );
**/
return array(
    'emailAliases' => array(
        'an_old_email@example.com' => 'my_new_email@example.com',
        'annother_old_email@example.com' => 'my_new_email@example.com'
    ),
    'repositoriesPath' => array(
        'repo-name' => '../repo-path',
        'repo-name2' => '../repo-path2',
        'repo-name3' => '../repo-path3'
        )
    );
?>
