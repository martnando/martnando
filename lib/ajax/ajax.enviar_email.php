<?

include_once('/home/martnand/public_html/lib/php/phpmailer/class.phpmailer.php');
$vnome = $_REQUEST['name'];
$vemail = $_REQUEST['email'];
$vmensagem = $_REQUEST['msg'];
$destinatario = "fernando.martinello@gmail.com";
$assunto = "Contato | Martnando.com";
$retorno = array();
$html = '<table border = "0">';
$html .= '<tbody>';
$html .= '<tr>';
$html .= '<td>Nome: </td>';
$html .= '<td>' . $vnome . '</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td>E-Mail: </td>';
$html .= '<td>' . $vemail . '</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td>Menssagem: </td>';
$html .= '<td>' . $vmensagem . '</td>';
$html .= '</tr>';
$html .= '</tbody>';
$html .= '</table>';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "localhost";
$mail->SetFrom($vemail, $vnome);
$mail->Subject = $assunto;
$mail->MsgHTML($html);
$mail->AddAddress($destinatario);
if (!$mail->Send()) {
    $retorno['sts'] = 9;
} else {
    $retorno['sts'] = 1;
}echo json_encode($retorno);
