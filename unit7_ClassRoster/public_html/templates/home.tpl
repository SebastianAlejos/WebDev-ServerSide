{extends "mainLayout.tpl"}

{block name=tabTitle}Students in Web I{/block}

{block name=body}
    <h1>Students in Web I</h1>
    <table style="border: solid thin black; collapse: collapse;">
        <tr><th>First Name</th><th>Last Name</th></tr>
        {foreach $students as $key=>$student}
            <tr>
                <td>{$student['First_Name']}</td>
                <td>{$student['Last_Name']}</td>
            </tr>
        {/foreach}
    </table>
{/block}