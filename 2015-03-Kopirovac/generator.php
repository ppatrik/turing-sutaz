<?php
$vstup = "# overenie cisla
s100 1 1 R s101
s100 0 0 R s201

# prejdenie pre jednotku
# 1 doprava
s101 1 1 R s102
s101 0 0 R s102
# 2 doprava
s102 1 1 R s103
s102 0 0 R s103
# 3 doprava
s103 1 1 R s104
s103 0 0 R s104
# 4 doprava
s104 1 1 R s105
s104 0 0 R s105
# 5 doprava
s105 1 1 R s106
s105 0 0 R s106
# 6 doprava
s106 1 1 R s107
s106 0 0 R s107
# 7 doprava
s107 1 1 R s108
s107 0 0 R s108
# 8 doprava
s108 1 1 R s109
s108 0 0 R s109
# 9 doprava
s109 1 1 R s110
s109 0 0 R s110

# zapisanie cisla na poziciu
s110 0 1 R s120

# ------------------ prejdenie pre nulu
# 1 doprava
s201 1 1 R s202
s201 0 0 R s202
# 2 doprava
s202 1 1 R s203
s202 0 0 R s203
# 3 doprava
s203 1 1 R s204
s203 0 0 R s204
# 4 doprava
s204 1 1 R s205
s204 0 0 R s205
# 5 doprava
s205 1 1 R s206
s205 0 0 R s206
# 6 doprava
s206 1 1 R s207
s206 0 0 R s207
# 7 doprava
s207 1 1 R s208
s207 0 0 R s208
# 8 doprava
s208 1 1 R s209
s208 0 0 R s209
# 9 doprava
s209 1 1 R s210
s209 0 0 R s210

# zapisanie cisla na poziciu
s210 0 0 R s120

# ----------------------------
# vratenie sa späť
# 1 dolava
s120 0 0 L s121
s120 1 1 L s121
# 2 dolava
s121 0 0 L s122
s121 1 1 L s122
# 3 dolava
s122 0 0 L s123
s122 1 1 L s123
# 3 dolava
s123 0 0 L s124
s123 1 1 L s124
# 4 dolava
s124 0 0 L s125
s124 1 1 L s125
# 5 dolava
s125 0 0 L s126
s125 1 1 L s126
# 6 dolava
s126 0 0 L s127
s126 1 1 L s127
# 7 dolava
s127 0 0 L s128
s127 1 1 L s128
# 8 dolava
s128 0 0 L s129
s128 1 1 L s129
# 9 dolava
s129 0 0 L s130
s129 1 1 L s130
";

$vystup = "s0 0 0 N s0100
s0 1 1 N s0100
";
for($i = 0; $i < 10; $i++) {
    $vystup .= "# Cycle #$i\n".preg_replace("/s(\d)/i", "s".$i."$1", $vstup) ."\n";
    // prechod na druhe kopirovanie
    if($i<9) {
        $vystup .= "s{$i}130 1 1 N s" . ($i + 1) . "100\n";
        $vystup .= "s{$i}130 0 0 N s" . ($i + 1) . "100\n";
    }

}

file_put_contents("turing", $vystup);