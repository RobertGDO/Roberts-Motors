<?php
session_start();
?>
   
   
   </main>
    <aside class="contactAside">
        <form action="mailto:roxie800@hotmail.com? subject=Contact" method="Get">
            <div>
                <label for="title">Mr:</label>
                <input type="radio" name="Title" value="Mr" id="title">
                <label for="title">Miss:</label>
                <input type="radio" name="Title" value="Miss">
                <label for="title">Mrs:</label>
                <input type="radio" name="Title" value="Mrs">
                <label for="title">Ms:</label>
                <input type="radio" name="Title" value="Ms">
            </div>
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname" id="firstname" required>
            <label for="surname">Surname:</label>
            <input type="text" name="surname" id="surname" required>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <label for="subject">Message subject:</label>
            <select name="subject" id="subject">
                <option value="1">Find out more</option>
                <option value="2">Give feedback</option>
                <option value="3">Ask questions</option>
                <option value="5">Other</option>
            </select>
            <label for="moreinformation">Additional information:</label>
            <textarea name="moreinformation" id="moreinformation"></textarea>
            <label for="terms">Terms and conditions</label>
            <input type="checkbox" name="terms" value="ticked" id="terms" required>
            <input type="submit" value="submit">

        </form>
    </aside>
