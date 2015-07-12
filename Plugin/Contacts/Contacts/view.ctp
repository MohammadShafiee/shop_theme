<?php $this->set('notShowBread', true);?>
<?php
echo $this->element('Contacts.contactus_map', compact('contact'));
echo $this->element('Contacts.contactus_body', compact('contact'));