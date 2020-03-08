---
type: static
uniqueid: contact
title: 'Want to get in touch with us ?'
---
<style>.hide-robot {display: none;}</style>
<form name="contact" class="contactform" method="post" action="/form/handle_form.php">
  <input name="firstname" type="text" id="firstname" class="hide-robot">
  <p><label>Name<br><input type="text" name="name" placeholder="Your Name"></label></p>
  <p><label>Email<br><input type="email" name="email" placeholder="Your e-mail"></label></p>
  <p><label>Message<br><textarea type="text" rows="4" name="message" placeholder="Your Message"
              style="height: 200px; padding:10px; width: 70%;"></textarea></label></p>
  <p><input type="submit" class="btcta rev form" name="sent" value="Send →" style="display: inline-block;position: relative;right: auto;width: auto;font-weight: bold;padding: 15px 40px;">
  </p>
</form>