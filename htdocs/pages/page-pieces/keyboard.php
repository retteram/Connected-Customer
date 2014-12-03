<div id="keyboard">
	<?php
		// Make sure keyboard stays.
		$keyboardlayout = [ // US Standard Keyboard
	    [["`", "~"], ["1", "!"], ["2", "@"], ["3", "#"], ["4", "$"], ["5", "%"], ["6", "^"], ["7", "&"], ["8", "*"], ["9", "("], ["0", ")"], ["-", "_"], ["=", "+"], ["Bksp", "Bksp"]],
	    [["Tab", "Tab"], ["q", "Q"], ["w", "W"], ["e", "E"], ["r", "R"], ["t", "T"], ["y", "Y"], ["u", "U"], ["i", "I"], ["o", "O"], ["p", "P"], ["[", "{"], ["]", "}"], ["\\", "|"]],
	    [["Caps", "Caps"], ["a", "A"], ["s", "S"], ["d", "D"], ["f", "F"], ["g", "G"], ["h", "H"], ["j", "J"], ["k", "K"], ["l", "L"], [";", ":"], ["'", "\""], ["NEW", "NEW"]],
	    [["Shift", "Shift"], ["z", "Z"], ["x", "X"], ["c", "C"], ["v", "V"], ["b", "B"], ["n", "N"], ["m", "M"], [",", "<"], [".", ">"], ["/", "?"], ["Shift", "Shift"]],
	    [["Clear", "Clear"], ["&nbsp;", "&nbsp;"], ["@", "@"], [".com", ".COM"]]
	  ];

		foreach($keyboardlayout as $rindex => $row) {
			echo "<div class='keyboard-row row-$rindex'>";
			foreach($row as $kindex => $key) {
				echo "<div onclick='keyClick(this)' class='keyboard-key key-$kindex' data-primary=\"".$key[0]."\" data-secondary='".$key[1]."'>".$key[0]."</div>";
			}
			echo "</div>";
		}
	?>
</div>