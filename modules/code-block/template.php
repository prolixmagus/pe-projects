<?php
	$code = "
function generateNounOptions(selector) {
  nounList.forEach( (noun) => {
    var optionNoun = document.createElement('option');
    optionNoun.setAttribute('value, noun);
    optionNoun.innerText = noun;
    selector.appendChild(optionNoun);
  })
}
	";
?>

<code-block>
	<pre>
		<code>
			<?=$code?>
		</code>
	</pre>
</code-block>
