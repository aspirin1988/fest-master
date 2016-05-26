<?php //get_header();

header('Content-Type: application/json');
//echo json_encode($_POST);
//Добавление новой группы
if (isset($_POST['add_direct'])) {
    global $current_user;
    get_currentuserinfo();
    echo json_encode(add_direct(2, (string)$_POST['dbg_name'], (string)$_POST['description'], $current_user,$_POST['href']));
    die();
   }

if (isset($_POST['add_group']))
{
    $subjects='';
    if ($_POST['subjects_type']==1)
    {
        $subjects=$_POST['subjects_1'];
    }
    else
    {
        $subjects=$_POST['subjects_2'];
    }
$ins=[
'add_group'=>$_POST['add_group'],
'address_parish'=>$_POST['address_parish'],
'age_from'=>$_POST['age_from'],
'age_to'=>$_POST['age_to'],
'city'=>$_POST['city'],
'name_boss'=>$_POST['name_boss'],
'name_confessor'=>$_POST['name_confessor'],
'name'=>$_POST['name_gr'],
'name_parish'=>$_POST['name_parish'],
'number_of_persons'=>$_POST['number_of_persons'],
'region'=>$_POST['region'],
'san_confessor'=>$_POST['san_confessor'],
'subjects'=>$subjects,
'subjects_type'=>$_POST['subjects_type'],
'total_number_of_persons'=>$_POST['total_number_of_persons'],
'command_type'=>$_POST['command_type'],
'leader_phone'=>$_POST['leader_phone'],
'leader_email'=>$_POST['leader_email'],
'leder_contacts'=>$_POST['leder_contacts'],
'confessor_phone'=>$_POST['confessor_phone'],
'confessor_email'=>$_POST['confessor_email'],
'confessor_contacts'=>$_POST['confessor_contacts'],
'advanced_data'=>$_POST['advanced_data'],
'geoposition'=>$_POST['geoposition'],
'leader_profession'=>$_POST['leader_profession'],
'eparhy'=>$_POST['$eparhy'],
];

    global $current_user;
    get_currentuserinfo();
    //print_r($ins);
    $res=add_group($current_user,$ins['name'],$current_user->ID,$ins['name_boss'],$ins['name_confessor'],$ins['san_confessor'],$ins['region'],$ins['city'],$ins['address_parish'],$ins['name_parish'],$ins['number_of_persons'],$ins['age_from'],$ins['age_to'],$ins['total_number_of_persons'],$ins['subjects'],$ins['subjects_type'],$ins['command_type'],$ins['leader_phone'],$ins['leader_email'],$ins['leder_contacts'],$ins['confessor_phone'],$ins['confessor_email'],$ins['confessor_contacts'],$ins['advanced_data'],$ins['geoposition'],$ins['leader_profession'],$ins['eparhy']);
    echo json_encode($res);
}

if (isset($_POST['subjects_type'])&& !isset($_POST['add_group']))
{
    echo json_encode(show_all_directory((int)$_POST['subjects_type'],$_POST['enter']));
}

if (isset($_POST['reg_in_group']))
{
    global $current_user;
    get_currentuserinfo();
    $res=select_gr($current_user,$_POST['user_reg_gr']);
    echo json_encode($res);
}
if (isset($_POST['show_gr']))
{
    global $current_user;
    get_currentuserinfo();
    $res=show_all_gr_apr();
    //print_r($res);
    echo json_encode($res);
}

