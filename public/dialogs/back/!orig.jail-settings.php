<script type="text/javascript">
err_messages.add({
	'jname':'<translate>Can not be empty. Name must begin with a letter / a-z / and not have any special symbols: -,.=%</translate>',
	'hostname':'<translate>This field can not be empty</translate>',
	'ip':'<translate>Write correct ip address, e.g: 10.0.0.2</translate>',
	'rootpass':'<translate>Password can not be less than 3 symbols</translate>',
	'rootpass1':'<translate>Please retype password correctly</translate>',
});
</script>
<dialog id="jail-settings" class="window-box new">
	<h1>
		<span class="new"><translate>Create jail</translate></span>
		<span class="edit"><translate>Edit jail</translate></span>
	</h1>
	<h2><translate>Jail Settings</translate></h2>
	<form class="win" method="post" id="jailSettings" onsubmit="return false;">
		<div class="window-content">
			<p>
				<span class="field-name"><translate>Jail name</translate>:</span>
				<input type="text" name="jname" value="" pattern="[^0-9]{1}[a-zA-Z0-9]{2,}" required="required" class="edit-disable" />
			</p>
			<p>
				<span class="field-name"><translate>Hostname</translate> (FQDN):</span>
				<input type="text" name="host_hostname" value="" required="required" />
<!--
				<small class="astart-warn">— <translate>available on the jail is not running</translate></small>
-->
			</p>
			<p>
				<span class="field-name"><translate>IP address</translate>:</span>
				<input type="text" name="ip4_addr" value="DHCP" pattern="^DHCP$|^DHCP[vV]6$|^(?:[0-9]{1,3}\.){3}[0-9]{1,3}(\/[\d]{1,3})?$" required="required" />
			</p>
			<p class="new">
				<span class="field-name"><translate>Root password</translate>:</span>
				<input type="password" name="user_pw_root" value="" placeholder="3-20 symbols" pattern=".{3,20}" maxlength="20"></input>
			</p>
			<p class="new">
				<span class="field-name"><translate>Root password (again)</translate>:</span>
				<input type="password" name="user_pw_root_1" value="" placeholder="3-20 symbols" pattern=".{3,20}" maxlength="20"></input>
			</p>
			<p>
				<span class="field-name"><translate>Net Interface</translate>:</span>
				<input type="radio" name="interface" value="auto" id="rint0" checked="checked" class="inline"><label for="rint0">auto</label></radio>
				<input type="radio" name="interface" value="lo0" id="rint2" class="inline"><label for="rint2">lo0</label></radio>
			</p>
			<p>
				<span class="field-name"><translate>Parameters</translate>:</span>
				<input type="checkbox" name="baserw" id="bwritable-id" /><label for="bwritable-id"> <translate>Base writable</translate>?</label>
				<br />
				<input type="checkbox" name="mount_ports" id="mount-id" /><label for="mount-id"> <translate>Mount</translate> /usr/ports?</label>
				<br />
				<input type="checkbox" name="astart" id="astart-id" /><label for="astart-id"> <translate>Autostart jail at system startup</translate></label>
				<br />
				<input type="checkbox" name="vnet" id="vnet-id" /><label for="vnet-id"> <translate>Virtual network stack (VIMAGE)</translate></label>
			</p>
			<p class="new">
				<span class="field-name"><translate>Enabled services</translate>:</span>
				<input type="checkbox" name="serv-ftpd" value="ftpd" id="esrv0" class="inline"><label for="esrv0">ftpd</label></checkbox>
				<input type="checkbox" name="serv-sshd" value="sshd" id="esrv1" class="inline"><label for="esrv1">sshd</label></checkbox>
			</p>

		</div>
	</form>
	<div class="buttons">
		<input type="button" value="<translate>Create</translate>" class="new button ok-but" />
		<input type="button" value="<translate>Save</translate>" class="edit button ok-but" />
		<input type="button" value="<translate>Cancel</translate>" class="button red cancel-but" />
	</div>
</dialog>
<?php

/*
сложное правило для пароля: цифры, буквы маленькие и заглавные, плюс спецсимволы
^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,20}$
*/