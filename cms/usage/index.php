
<?php include("../header.php"); ?>
<div class="usage">
	<h1>1. CSS Preprocessors</h1>
	<p>
		I'm not going to go into detail into what css preprocessors are or which one is better, both <a href="http://sass-lang.com/" target="_blank"><strong>SASS</strong></a> and <a href="http://lesscss.org/" target="_blank"><strong>LESS</strong></a> are both pretty cool and I believe every web designer should at least have a play with one of them.
	</p>
	<p class="space">
		One thing you need to know if you're new to this, SASS uses Ruby on Rails and LESS uses Javascript. That should help with your choice.
	</p>
	<h1>2. Setting Up</h1>
	<p class="space">
		If your farmilliar with SASS or LESS this should be a walk in the park. Make sure the main _ColorMeSASS.scss file is imported at the very bottom so it will overwrite any similar colour variables you have.
	</p>
	<h1>3. Using the Colours</h1>
	<p>
		Now here's the fun part. If you want to use a colour all you need to do is type in it's variable name.

		<pre>
			<code class="language-css">
				body{
					background-color: $orangeDuller;
					color: $white;
				}
			</code>
		</pre>
		<p>
			The cool thing about CSS pre-processors is you can make the colour lighter or darker, desaturate or saturate colours, change the hue, or even mix two colours together and it will calculate the correct hexadecimal value and place it in the compiled CSS. Pretty neat right.
		</p>

		<strong>Lightness</strong>

		<pre class="language-css">
			<code class="language-css">
				/*  LIGHTEN  */ 

				body{
					background-color: lighten($yellowDark, 25%);
				}

				/*  DARKEN  */

				body{
					background-color: darken($pinkCoral, 76%);
				}
			</code>
		</pre>

		<strong>Saturation</strong>

		<pre class="language-css">
			<code class="language-css">
				/*  DESATURATE  */

				body{
				    background-color: desaturate($amberDull, 14%);
				}

				/*  SATURATE  */

				body{
				    background-color: saturate($greenSea, 39%);
				}
			</code>
		</pre>		

		<strong>Hue</strong>

		<pre class="language-css">
			<code class="language-css">
				body{
					background-color: adjust_hue($purplePlum, 78); /* between 0 - 360 */
				}
			</code>
		</pre>

		<strong>More than one adjustment</strong>

		<pre class="language-css">
			<code class="language-css">
				/*  HS (HUE &amp; SATURATION)  */

				body{
				    background-color: adjust_color($brownBronze, $hue: 11%, $saturation: -8%)
				}

				/*  HSL (HUE, SATURATION &amp; LIGHTNESS)  */

				body{
				    background-color: lighten(adjust_hue(desaturate($blueLighter, 8), 11), 0)
				}
			</code>
		</pre>	


		<strong>Mixing Colours</strong>

		<pre class="language-css">
			<code class="language-css">
				$cool_purple:  mix($red, $blue, 50%);

				body{
				    background-color: $cool_purple;
				}
			</code>
		</pre>

		<p class="space">
			The possibilities are pretty much endless. Have fun.<br>
			Don't forget to hit me up on <a href="https://twitter.com/Ceiga" target="_blank"><strong>twitter</strong></a> if you end up using this for a site you work on.
		</p>
	</p>
</div>
<?php include("../footer.php"); ?>	