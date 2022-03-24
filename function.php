<?php 

// Fungsi untuk menentukan jumlah huruf kecil dalam sebuah string
function hitung($s){
    $string = $s;
    
    $jumlah_karakter = 0;
    $matches = array();
    if (preg_match_all("/[a-z]/", $string, $matches) > 0) {
        foreach ($matches[0] as $match)
        { 
            $jumlah_karakter += strlen($match); }
        }
        return $jumlah_karakter;
    }
// Fungsi untuk menentukan jumlah huruf kecil dalam sebuah string


function unigram($request){ 
    $result= explode(" ",$request);
    return implode(", ",$result) ;
}
function bigram($request){ 
    $input = explode(" ", $request);

    $x = 0;
		$bigram = '';
		foreach ($input as $item) {
			if ($x < 1) {
				$bigram .= $item.' ';
				$x++;
			} else {
				$bigram .= $item.', ';
				$x = 0;
			}
		}
		$bigram = substr($bigram, 0, -2);

        return $bigram;
}
function trigram($request){ 
    $input = explode(" ", $request);
        $y = 0;
		$trigram = '';
		foreach ($input as $item) {
			if ($y < 2) {
				$trigram .= $item.' ';
				$y++;
			} else {
				$trigram .= $item.', ';
				$y = 0;
			}
		}
		$trigram = substr($trigram, 0, -2);

        return $trigram;
}


function enkrip($input){
    $huruf = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
  
    $input = strtoupper($input);
    $arr_input = str_split($input);

    $plus = true;
    $hasil = '';
    $x = 1;
    $tmp = 0;
    for ($i=0; $i < count($arr_input); $i++) { 
        $tmp = array_search($arr_input[$i], $huruf);
        if ($plus == true) {
            $hasil .= $huruf[$tmp+$x];
            $plus = false;
        } else {
            $ne = $tmp-$x;
            if ($ne < 0) {
                $ne = count($huruf) + ($ne);
            }
            $hasil .= $huruf[$ne];
            $plus = true;
        }
        $x++;
    }
    
  return $hasil;
}

function pola($input){
    $color['black']  = [1,2,5,7,10,11];
    $color['white'] = [3,4,6,8,9,12];

    if (in_array($input, $color['black'])) {
      return 'style="background : black; color: white;"';
    } else {
      return 'style="background : white"';
    }
  } 
?>