<?php
	require_once("layout.php");
?>

<?php drawHeader(); ?>

    	<h1 class="page-head">This is the page Title</h1>

		<p>
A normal Paragraph looks like lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eros mauris, euismod non pretium vel, gravida et est. Aenean ac ullamcorper lorem. Etiam quam sem, sodales ut interdum ac, varius nec erat. Sed nibh neque, consectetur ac dignissim sed, porttitor ac felis. Quisque accumsan sapien id tortor tempor lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec in mi ut nulla ullamcorper suscipit. Morbi aliquet neque eu orci eleifend ut euismod est tristique. Vestibulum a orci elit, condimentum fringilla tortor. <a href="#">Click here</a> to Cras sit amet lacus dolor, tempor laoreet augue. Sed vulputate porttitor iaculis. Cras malesuada, felis consectetur mattis bibendum, risus nibh gravida nisl, non viverra risus felis quis nunc. Morbi diam lorem, condimentum dictum ultrices nec, vestibulum sit amet nulla. Integer pulvinar nibh ut lorem lobortis mollis. Integer faucibus cursus lectus, nec elementum ante pulvinar a.<br />
		<a href="#">Another link</a>
        </p>
        
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>

		<div class="notification error">
        <h2>This is an error</h2>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eros mauris, euismod non pretium vel, gravida et est. Aenean ac ullamcorper lorem.
        </div>

		<div class="notification">
        <h2>A normal notification</h2>
This is a normal notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eros mauris, euismod non pretium vel, gravida et est. Aenean ac ullamcorper lorem.
        </div>

		<div class="notification success">
        <h2>A success notification</h2>
This is a normal notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eros mauris, euismod non pretium vel, gravida et est. Aenean ac ullamcorper lorem.
        </div>
        
        <div class="column">
A normal Paragraph looks like lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eros mauris, euismod non pretium vel, gravida et est. Aenean ac ullamcorper lorem. Etiam quam sem, sodales ut interdum ac, varius nec erat. Sed nibh neque, consectetur ac dignissim sed, porttitor ac felis. Quisque accumsan sapien id tortor tempor lobortis. Cum sociis natoque penatibus et magnis dis parturient montes
        </div>
        
        <div class="column">
A normal Paragraph looks like lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eros mauris, euismod non pretium vel, gravida et est. Aenean ac ullamcorper lorem. Etiam quam sem, sodales ut interdum ac, varius nec erat. Sed nibh neque, consectetur ac dignissim sed, porttitor ac felis. Quisque accumsan sapien id tortor tempor lobortis. Cum sociis natoque penatibus et magnis dis parturient montes
        </div>
        
        
        <hr />
        
        <table>
        	<tr>
            	<th>Column 1</th>
            	<th>Column 2</th>
            	<th>Column 3</th>
            </tr>
            
        	<tr>
            	<td>Field 1</td>
            	<td><input type="text" placeholder="Sample Textbox" /></td>
            	<td><input type="button" value="Button" /></td>
            </tr>


        	<tr>
            	<td>Field 1</td>
            	<td><input type="text" placeholder="Sample Textbox" /></td>
            	<td><input type="button" value="Button" /></td>
            </tr>

        	<tr>
            	<td>Field 1</td>
            	<td><input type="text" placeholder="Sample Textbox" /></td>
            	<td><input type="button" value="Button" /></td>
            </tr>

        	<tr>
            	<td>Field 1</td>
            	<td><input type="text" placeholder="Sample Textbox" /></td>
            	<td><input type="button" value="Button" /></td>
            </tr>

        	<tr>
            	<td>Field 1</td>
            	<td><input type="text" placeholder="Sample Textbox" /></td>
            	<td><input type="button" value="Button" /></td>
            </tr>

        	<tr>
            	<td>Field 1</td>
            	<td>
                <select>
                	<option>Option 1</option>
                	<option>Option 1</option>
                	<option>Option 1</option>
                </select>
                </td>
            	<td><input type="button" value="Button" /></td>
            </tr>

        </table>
        
        <hr />
        <h2>Form Elements</h2>
        <input type="text" placeholder="A small textbox" />
        <input type="text" placeholder="A much larger textbox" size=100 />
        <input type="password" placeholder="Password" /><br /><br />
        
        <input type="button" value="Input Button" />
        <button>HTML5 Button</button>
        <button class="error">Red Button</button>
		<input type="submit" value="Submit Button" />
        <input type="reset" value="Reset Button" /><br /><br />

		Checkboxes <input type="checkbox" /> <input type="checkbox" /> <input type="checkbox" />  <input type="checkbox" /> <br />
        Radio buttons <input type="radio" name="m" /> <input type="radio" name="m" /> <input type="radio" name="m" />
        <br /><br />
        
		Combo Box:
        <select>
        	<option>Value 1</option>
        	<option>Value 2</option>
        	<option>Value 3</option>
        	<option>Value 4</option>
        	<option selected="selected">Choose an option</option>
        </select><br /><br />
        
		<textarea placeholder="Textarea" rows="5" cols="50"></textarea><br /><br />
        File Input: <input type="file" />        <br>
		A loading icon: <i class="loading"></i>


<?php drawFooter(); ?>