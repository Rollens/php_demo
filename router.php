<?
$route = new Router(Request::uri());
$route->getParameter(2);
switch($route->getParameter(2)){
    case 'do_create':
        $id=0;
        $name = "";
        $account = "";
        $password="";
        if(isset($_POST['id']))$id=$_POST['id'];
        if(isset($_POST['name']))$name=$_POST['name'];
        if(isset($_POST['account']))$account=$_POST['account'];
        if(isset($_POST['password']))$password=$_POST['password'];
        if( $name!="" and $account!="" and $password!=""){
            $table="user_info";
            $data_array['id']=$id;
            $data_array['name']=$name;
            $data_array['account']=$account;
            $data_array['password']=$password;
            Database::get()->insert($table,$data_array);
        }
        header("Location: "."/view/create");
        exit;
        break;
    case 'do_mail':
        try { 
            $to = "ke.rollens.0429@gmail.com";
            $subject = "Php auto mail";
            $body = "Lorem ipsum dolor sit amet,";
            $mail = new Email(Config::MAIL_USER_NAME, Config::MAIL_USER_PASSWORD);
            $mail->setFrom(Config::MAIL_FROM, Config::MAIL_FROM_NAME);
            $mail->addAddress($to);
            $mail->subject($subject);
            $mail->body($body);
            if($mail->send()){
                echo "success";
            }else{
                echo "fail";
            }
          } catch(Exception $e) {
            echo 'Caught exception: ',  $e->getMessage();
            $error[] = $e->getMessage();
          }
        break;
    case 'create':
        include('view/create.php');
        break;
    case'main':
        include('view/main.php');
        break;
    case'name':
        include('view/name.php');
        break;
    default:
        include('view/default.php');
}