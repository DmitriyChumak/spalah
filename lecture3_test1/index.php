<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 20.06.17
 * Time: 12:50
 */
echo "<H1>Лекция 3, практическое задание №1 </H1>";
echo "<H2>Задание</H2>";
echo "<p>Есть строка с текстом: <br></p>";
echo "&lt;p&gt; в том же 1990 году стартовал первый телесериал Линча — Твин Пикс. 
В основе сюжета сериала — расследование загадочного убийства школьницы Лоры Палмер, 
произошедшего в небольшом американском городке Твин Пикс. Сериал пользовался поначалу 
большим успехом, но уже через год съёмки были свёрнуты из-за низких рейтингов. Тем не 
менее сериал стал знаковым культурным явлением начала 1990-х. Ежегодно под Сиэтлом проходит 
слёт поклонников Твин Пикса &lt;/p&gt;";
echo '<br>';
echo '<br>Задачи</br>';
echo "<br>  1) посчитать количество повторений в строке выражения Твин Пикс</br>
            2) заменить в строке Твин Пикс на Twin Peaks</br>
            3) посчитать количество символов в строке</br>
            4) посчитать количество символов без пробелов в строке</br>
            5) убрать html-теги (&lt;p&gt;) в строке</br>
            6) вывести строку в браузере как html-код</br>
            7) первое слово \"В\" в начале тексте должно быть с большой буквы</br>";


echo "<br><Hr>";
echo "<H3>Выполнение задания</H3>";
$text = "&lt;p&gt; в том же 1990 году стартовал первый телесериал Линча — Твин Пикс.
В основе сюжета сериала — расследование загадочного убийства школьницы Лоры Палмер,
произошедшего в небольшом американском городке Твин Пикс. Сериал пользовался поначалу
большим успехом, но уже через год съёмки были свёрнуты из-за низких рейтингов. Тем не
менее сериал стал знаковым культурным явлением начала 1990-х. Ежегодно под Сиэтлом проходит
слёт поклонников Твин Пикса &lt;/p&gt;";


echo "<br>";
$a = 'Твин Пикс';
echo "<b>1) Количество повторений в строке выражения Твин Пикс = </b>";
echo substr_count($text,$a);//считает количество выражений в переменной $a строки $text


echo "<br></br>";
echo "<b>2) Замена выражения Твин Пикс на Twin Peaks. Результат: </b>";
echo str_replace('Твин Пикс','Twin Peaks',$text);// замена одной фразы на другую в строке


echo "<br></br>";
echo "<b>3) Количество символов в строке = </b>";
echo iconv_strlen($text,'utf-8');//подсчет количества символов в строке, Кирилица


echo "<br></br>";
echo "<b>4) Количество символов в строке без пробелов = </b>";
$text_bez_probelov = str_replace(' ','',$text);//удаление пробелов
echo iconv_strlen($text_bez_probelov);//подсчет количества символов в строке без пробелов уже


echo "<br></br>";
echo "<b>5) Удалим HTML - теги строке. Результат:  </b>";
$text_decode_lt = str_replace('&lt;','<',$text);//замена &lt; на <
$text_decode_all = str_replace('&gt;','>',$text_decode_lt);//замена &gt; на >
echo strip_tags($text_decode_all);// Удаление html сущности


echo "<br></br>";
echo "<b>6) Преобразуем строку в HTML - код. Результат: </b>";
//что-бы не повторять text_decode*** из задачи 5 воспользуемся уже преобразованноц переменной
echo html_entity_decode($text_decode_all);//преобразование в HTML код


echo "<b>7) Начало строки с заглавной буквы </b>";
//воспользуемся готовой преобразованной строкой
$text_bez_html = strip_tags($text_decode_all);// Удаление html сущности
$text_trim = trim($text_bez_html);//Удалим пробелы в начале и конце строки
$first_simvol = mb_substr($text_trim,0,1);
$else_simvol = mb_substr($text_trim,1);
$first_simvol_up = mb_strtoupper($first_simvol);
$text_zaglav = $first_simvol_up.$else_simvol;
echo html_entity_decode($text_zaglav);
