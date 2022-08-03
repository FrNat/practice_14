<?php

//возвращает массив пользователей в формате ключ это имя, значение это пароль
function getUsersList($users2){
    $users = array();
    foreach ($users2 as $key => $value) {
      $users[$key] = $value['pass'];
    }
    return $users;
}


//возвращает имя авторизованного пользователя или null
function getCurrentUser(){
  return $_POST['login'] ?? null;
}

//возвращает true тогда, когда существует пользователь с указанным логином и введенный им пароль прошел проверку
function checkPassword($login, $password, $users2){
  return (getCurrentUser($login) && password_verify($password, getUsersList($users2)[$login]));
}


// функция для определения времени до окончания акции
 function timeMessage ($time_input) {
    $current_time = time(); //запись отсчета 2 часа
    $time_deadline = ($time_input + 7200) - $current_time;//вычисляем срок действия акции
    $minutes = floor($time_deadline / 60); //минуты
    $hours = floor($minutes / 60); //полные часы
    $minutes = $minutes - ($hours * 60);  //количество оставшихся минут
    $message = nl2br('До окончания специального предложения: ' . $hours. ' ч. ' . $minutes . ' мин.');
    return $message;
}
 
//функция для вывода информации о дне рождения
function birthdayMessage($birthday_input, $users2, $login) {
    
  if(!$users2[$login]['b_day'] && !$birthday_input) {
      $message = nl2br('Получите дополнительную скидку в День Рождения!');//если день рождения не введен и не записан в массиве пользователей
  }
  else {

      $todayNumber = date('j'); //число текущего дня
      $todayMonth = date('n'); //число текущего месяца

      if(!$users2[$login]['b_day']) {
          $birthday = $birthday_input;  //если введена дата и ее нет в массиве пользователей
      }
          else {
              $birthday = $users2[$login]['b_day']; //дату рождения извлекаем из массива
          }

      $birthdayNumber = date('j', strtotime($birthday)); //число рождения
      $birthdayMonth = date('n', strtotime($birthday)); //месяц рождения

      if($todayNumber == $birthdayNumber && $todayMonth == $birthdayMonth) {

          $message = 'Сегодня, в Ваш день рождения, получите дополнительную скидку 20% на все услуги салона!'; //если день рождения сегодня
      }
          else {
              $bd = explode('-', $birthday); //получаем массив из даты рождения
              $bd = mktime(0, 0, 0, $bd[1], $bd[2], date('Y') + ($bd[1].$bd[2] <= date('md'))); //вычисляем дату в секундах
              $days_until = ceil(($bd - time()) / 86400); //дельта между ДР и текущим днем с округлением

              $message = 'До Вашего дня рождения осталось дней: ' . $days_until . '.'; //сколько осталось до наступления скидки
          }
      }
  return $message;
}

?>