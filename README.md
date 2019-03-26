# php-intro-namu-darbas
NFQ akademijos php intro paskaitos uzduotis

•Paaiškinti: • kodėl:
             Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’) yra 6?
  
  Funkcija priėmė įvairaus tipo parametrus juos paversdama į int tipą: 2.2 suapvalino iki 2, nes int tai sveikasis skaičius

• kas ir kodėl nutiko bandant kviesti:
             Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’);
             
 Iš pradžių viskas suveikė, nes strict tipų tikrinimas veikia tik tame faile, kuriame nurodyta declare(strict_types=1),
apgaubus funkciją, kurios kintamieji tikrinami, pgalbinefunkcija suveikė tikrinimas ir gauta klaida, kad perduodas ne tokio tipo
kintamasis, koks nurodytas funkcijos parametruose.  
