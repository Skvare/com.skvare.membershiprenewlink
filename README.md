# com.skvare.membershiprenewlink

This Extension provide online renewal link to the membership records. 

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.0+
* CiviCRM (*FIXME: Version number*)

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.skvare.membershiprenewlink@https://github.com/Skvare/com.skvare.membershiprenewlink/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/Skvare/com.skvare.membershiprenewlink.git
cv en membershiprenewlink
```

## Usage

This Extension provide online renewal link to the membership records. visit the 
`civicrm/admin/setting/preferences/member` (Administer CiviCRM -> CiviMember -> CiviMember Component Settings).

Select online page configured with Membership Priceset, there after you can see 'Renew Online' link for membership 
records in Membership Tab and Membership search form.