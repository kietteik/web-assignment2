<?php

/**
 * Format Class
 */
class Format
{
   public function formatDate($date)
   {
      return date('F j, Y, g:i a', strtotime($date));
   }

   public function textShorten($text, $limit = 400)
   {
      $text = $text . " ";
      $text = substr($text, 0, $limit);
      $text = substr($text, 0, strrpos($text, ' '));
      $text = $text . ".....";
      return $text;
   }

   public function validation($data)
   {
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }

   public function title()
   {
      $path = $_SERVER['SCRIPT_FILENAME'];
      $title = basename($path, '.php');
      //$title = str_replace('_', ' ', $title);
      if ($title == 'index') {
         $title = 'home';
      } elseif ($title == 'contact') {
         $title = 'contact';
      }
      return $title = ucfirst($title);
   }


   public function time_elapsed_string($datetime, $full = false)
   {
      $now = new DateTime('now', new DateTimezone('Asia/Bangkok'));
      $ago = new DateTime($datetime, new DateTimezone('Asia/Bangkok'));
      $diff = $now->diff($ago);

      $diff->w = floor($diff->d / 7);
      $diff->d -= $diff->w * 7;

      $string = array(
         'y' => 'year',
         'm' => 'month',
         'w' => 'week',
         'd' => 'day',
         'h' => 'hour',
         'i' => 'minute',
         's' => 'second',
      );
      foreach ($string as $k => &$v) {
         if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
         } else {
            unset($string[$k]);
         }
      }

      if (!$full) $string = array_slice($string, 0, 1);
      return $string ? implode(', ', $string) . ' ago' : 'just now';
   }
}
