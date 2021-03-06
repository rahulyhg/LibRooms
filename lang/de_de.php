<?php
/**
Copyright 2011-2013 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once('Language.php');
require_once('en_us.php');

class de_de extends en_us
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return array
     */
    protected function _LoadDates()
    {
	$dates = parent::_LoadDates();

        $dates['general_date'] = 'd.m.Y';
        $dates['general_datetime'] = 'd.m.Y H:i:s';
        $dates['schedule_daily'] = 'l, d.m.Y';
        $dates['reservation_email'] = 'd.m.Y @ H:i (e)';
        $dates['res_popup'] = 'd.m.Y H:i';
        $dates['dashboard'] = 'l, d.m.Y H:i';
        $dates['period_time'] = 'H:i';
        $dates['general_date_js'] = 'dd.mm.yy';
        $dates['calendar_time'] = 'H:mm';
        $dates['calendar_dates'] = 'd.M';
                                                                                
        $this->Dates = $dates;

        return $this->Dates;
    }


    /**
     * @return array
     */
    protected function _LoadStrings()
    {
	$strings = parent::_LoadStrings();

        $strings['FirstName'] = 'Vorname';
        $strings['LastName'] = 'Nachname';
        $strings['Timezone'] = 'Zeitzone';
        $strings['Edit'] = 'Bearbeiten';
        $strings['Change'] = 'Ändern';
        $strings['Rename'] = 'Umbenennen';
        $strings['Remove'] = 'Entfernen';
        $strings['Delete'] = 'Löschen';
        $strings['Update'] = 'Update';
        $strings['Cancel'] = 'Abbrechen';
        $strings['Add'] = 'Hinzufügen';
        $strings['Name'] = 'Name';
        $strings['Yes'] = 'Ja';
        $strings['No'] = 'Nein';
        $strings['FirstNameRequired'] = 'Vorname wird benötigt.';
        $strings['LastNameRequired'] = 'Nachname wird benötigt.';
        $strings['PwMustMatch'] = 'Kennwörter müssen übereinstimmen.';
        $strings['PwComplexity'] = 'Das Kennwort muss mindestens 6 STellen besitzen und aus Buchstaben, Zahlen und Symbolen bestehen.';
        $strings['ValidEmailRequired'] = 'Emailadresse wird benötigt.';
        $strings['UniqueEmailRequired'] = 'Diese Emailadresse wurde bereits verwendet.';
        $strings['UniqueUsernameRequired'] = 'Diese Benutzername wird bereits verwendet.';
        $strings['UserNameRequired'] = 'Benutzername wird benötigt.';
        $strings['CaptchaMustMatch'] = 'Bitte die Sicherheitsabfrage korrekt beantworten.';
        $strings['Today'] = 'Heute';
        $strings['Week'] = 'Woche';
        $strings['Month'] = 'Monat';
        $strings['BackToCalendar'] = 'Zurück zum Kalender';
        $strings['BeginDate'] = 'Beginn';
        $strings['EndDate'] = 'Ende';
        $strings['Username'] = 'Benutzername';
        $strings['Password'] = 'Passwort';
        $strings['PasswordConfirmation'] = 'Passwort wiederholen';
        $strings['DefaultPage'] = 'Standard Startseite';
        $strings['MyCalendar'] = 'Mein Kalender';
        $strings['ScheduleCalendar'] = 'Terminplan Kalender';
        $strings['Registration'] = 'Registrierung';
        $strings['NoAnnouncements'] = 'Keine Ankündigungen';
        $strings['Announcements'] = 'Ankündigungen';
        $strings['NoUpcomingReservations'] = 'Sie haben keine aktuellen Reservierungen.';
        $strings['UpcomingReservations'] = 'Meine aktuellen Reservierungen';
        $strings['ShowHide'] = 'Einblenden/Ausblenden';
        $strings['Error'] = 'Fehler';
        $strings['ReturnToPreviousPage'] = 'Zurück zur vorigen Seite';
        $strings['UnknownError'] = 'Unbekannter Fehler';
        $strings['InsufficientPermissionsError'] = 'Sie dürfen diese Ressource nicht ausleihen.';
        $strings['MissingReservationRessourceError'] = 'Keine Ressource ausgewählt';
        $strings['MissingReservationScheduleError'] = 'Kein Plan ausgewählt';
        $strings['DoesNotRepeat'] = 'Nicht wiederholend';
        $strings['Daily'] = 'Täglich';
        $strings['Weekly'] = 'Wöchentlich';
        $strings['Monthly'] = 'Monatlich';
        $strings['Yearly'] = 'Jährlich';
        $strings['RepeatPrompt'] = 'Wiederholen';
        $strings['hours'] = 'Stunden';
        $strings['days'] = 'Tage';
        $strings['weeks'] = 'Wochen';
        $strings['months'] = 'Monate';
        $strings['years'] = 'Jahre';
        $strings['day'] = 'Tag';
        $strings['week'] = 'Woche';
        $strings['month'] = 'Monat';
        $strings['year'] = 'Jahr';
        $strings['repeatDayOfMonth'] = 'Tag im Monat';
        $strings['repeatDayOfWeek'] = 'Tag in Woche';
        $strings['RepeatUntilPrompt'] = 'Bis';
        $strings['RepeatEveryPrompt'] = 'Jeden';
        $strings['RepeatDaysPrompt'] = 'Ja';
        $strings['CreateReservationHeading'] = 'Neue Reservierung';
        $strings['EditReservationHeading'] = 'Reservierung %s bearbeiten';
        $strings['ViewReservationHeading'] = 'Reservierung %s anzeigen';
        $strings['ReservationErrors'] = 'Reservierung ändern';
        $strings['Create'] = 'Anlegen';
        $strings['ThisInstance'] = 'In dieser Instanz';
        $strings['AllInstances'] = 'Alle Instanzen';
        $strings['FutureInstances'] = 'Zukünftige Instanzen';
        $strings['Print'] = 'Drucken';
        $strings['ShowHideNavigation'] = 'Navigation Einblenden/Ausblenden';
        $strings['ReferenceNumber'] = 'Referenznummer';
        $strings['Tomorrow'] = 'Morgen';
        $strings['LaterThisWeek'] = 'Später diese Woche';
        $strings['NextWeek'] = 'Nächste Woche';
        $strings['SignOut'] = 'Abmelden';
        $strings['LayoutDescription'] = 'Beginnend %s, zeige %s Tage';
        $strings['AllResources'] = 'Alle Ressourcen';
        $strings['TakeOffline'] = 'Offline gehen';
        $strings['BringOnline'] = 'Online gehen';
        $strings['AddImage'] = 'Bild hinzufügen';
        $strings['NoImage'] = 'Kein Bild zugewiesen';
        $strings['Move'] = 'Verschieben';
        $strings['AppearsOn'] = 'Erscheint im %s';
        $strings['Location'] = 'Position';
        $strings['NoLocationLabel'] = '(keine Position gesetzt)';
        $strings['Contact'] = 'Kontakt';
        $strings['NoContactLabel'] = '(keine Kontaktinformationen)';
        $strings['Description'] = 'Beschreibung';
        $strings['NoDescriptionLabel'] = '(keine Beschreibung)';
        $strings['Notes'] = 'Notizen';
        $strings['NoNotesLabel'] = '(keine Notizen)';
        $strings['NoTitleLabel'] = '(kein Titel)';
        $strings['UsageConfiguration'] = 'Reservierungskonfiguration';
        $strings['ChangeConfiguration'] = 'Konfiguration ändern';
        $strings['ResourceMinLength'] = 'Reservierung muss mindestens %s dauern';
        $strings['ResourceMinLengthNone'] = 'Es gibt keine minimale Reservierungsdauer';
        $strings['ResourceMaxLength'] = 'Reservierungen dürfen nicht länger als %s dauern';
        $strings['ResourceMaxLengthNone'] = 'Es gibt keine maximale Reservierungsdauer';
        $strings['ResourceRequiresApproval'] = 'Reservierungen müssen bestätigt werden';
        $strings['ResourceRequiresApprovalNone'] = 'Reservierungen müssen nicht bestätigt werden';
        $strings['ResourcePermissionAutoGranted'] = 'Berechtigung wird automatisch gewährt';
        $strings['ResourcePermissionNotAutoGranted'] = 'Berechtigung wird nicht automatisch gewährt';
        $strings['ResourceMinNotice'] = 'Reservierungen müssen mindestens %s vor der Startzeit getätigt werden';
        $strings['ResourceMinNoticeNone'] = 'Reservierungen können ohne Vorlaufzeit getätigt werden';
        $strings['ResourceMaxNotice'] = 'Reservierungen dürfen nicht %s vor der aktuellen Zeit enden';
        $strings['ResourceMaxNoticeNone'] = 'Reservierungen können zu jeder Zeit enden';
        $strings['ResourceAllowMultiDay'] = 'Reservierungen können sich über mehrere Tage erstrecken';
        $strings['ResourceNotAllowMultiDay'] = 'Reservierungen dürfen sich nicht über mehrere Tage erstrecken';
        $strings['ResourceCapacity'] = 'Diese Ressource hat eine Kapazität von %s Personen';
        $strings['ResourceCapacityNone'] = 'Diese Ressource hat unlimitierte Kapazität';
        $strings['AddNewResource'] = 'Neue Ressource hinzufügen';
        $strings['AddNewUser'] = 'Neuen Benutzer hinzufügen';
        $strings['AddUser'] = 'Benutzer hinzufügen';
        $strings['Schedule'] = 'Terminplan';
        $strings['AddResource'] = 'Ressource hinzufügen';
        $strings['Capacity'] = 'Kapazität';
        $strings['Access'] = 'Zugriff';
        $strings['Duration'] = 'Dauer';
        $strings['Active'] = 'Aktiv';
        $strings['Inactive'] = 'Inaktiv';
        $strings['LastLogin'] = 'Letzter Login';
        $strings['Search'] = 'Suchen';
        $strings['ResourcePermissions'] = 'Ressourcen Berechtigungen';
        $strings['Reservations'] = 'Reservierungen';
        $strings['Groups'] = 'Gruppen';
        $strings['ResetPassword'] = 'Reset Passwort';
        $strings['AllUsers'] = 'Alle Benutzer';
        $strings['AllGroups'] = 'Alle Gruppen';
        $strings['AllSchedules'] = 'Alle Terminpläne';
        $strings['UsernameOrEmail'] = 'Benutzername oder Email';
        $strings['Members'] = 'Mitglieder';
        $strings['QuickSlotCreation'] = 'Erzeuge Zeitschlitze alle %s Minuten zwischen %s und %s';
        $strings['ApplyUpdatesTo'] = 'Updates anwenden';
        $strings['CancelParticipation'] = 'Teilnahme beenden';
        $strings['Attending'] = 'Teilnahme';
        $strings['QuotaConfiguration'] = 'Zeitkontingente im Terminplan %s für Ressource %s und Benutzer in %s sind limitiert auf %s %s pro %s';
        $strings['reservations'] = 'Reservierungen';
        $strings['ChangeCalendar'] = 'Kalender ändern';
        $strings['AddQuota'] = 'Zeitkontingent hinzufügen';
        $strings['FindUser'] = 'Benutzer finden';
        $strings['Created'] = 'Erzeugt';
        $strings['LastModified'] = 'Zuletzt geändert';
        $strings['GroupName'] = 'Gruppen Name';
        $strings['GroupMembers'] = 'Gruppen Mitglieder';
        $strings['GroupRoles'] = 'Gruppen Rollen';
        $strings['GroupAdmin'] = 'Gruppen Administrator';
        $strings['Actions'] = 'Aktionen';
        $strings['CurrentPassword'] = 'Aktuelles Kennwort';
        $strings['NewPassword'] = 'Neues Kennwort';
        $strings['InvalidPassword'] = 'Das Kennwort ist falsch';
        $strings['PasswordChangedSuccessfully'] = 'Das Kennwort wurde geändert';
        $strings['SignedInAs'] = 'Angemeldet als';
        $strings['NotSignedIn'] = 'Sie sind nicht angemeldet';
        $strings['ReservationTitle'] = 'Titel der Reservierung';
        $strings['ReservationDescription'] = 'Beschreibung der Reservierung';
        $strings['ResourceList'] = 'Zu reservierende Ressourcen';
        $strings['Accessories'] = 'Zubehör';
        $strings['Add'] = 'Hinzufügen';
        $strings['ParticipantList'] = 'Teilnehmer';
        $strings['InvitationList'] = 'Eingeladene';
        $strings['AccessoryName'] = 'Zubehör Name';
        $strings['QuantityAvailable'] = 'Verfügbare Menge';
        $strings['Resources'] = 'Ressourcen';
        $strings['Participants'] = 'Teilnehmer';
        $strings['User'] = 'Benutzer';
        $strings['Resource'] = 'Ressource';
        $strings['Status'] = 'Status';
        $strings['Approve'] = 'Freigeben';
        $strings['Page'] = 'Seite';
        $strings['Rows'] = 'Zeilen';
        $strings['Unlimited'] = 'Unlimitiert';
        $strings['Email'] = 'Email';
        $strings['EmailAddress'] = 'Email Addresse';
        $strings['Phone'] = 'Telefon';
        $strings['Organization'] = 'Organisation';
        $strings['Position'] = 'Position';
        $strings['Language'] = 'Sprache';
        $strings['Permissions'] = 'Berechtigungen';
        $strings['Reset'] = 'Reset';
        $strings['FindGroup'] = 'Gruppe finden';
        $strings['Manage'] = 'Verwalten';
        $strings['None'] = 'Nichts';
        $strings['AddToOutlook'] = 'Zum Kalender hinzufügen';
        $strings['Done'] = 'Fertig';
        $strings['RememberMe'] = 'Angemeldet bleiben';
        $strings['FirstTimeUser?'] = 'Neuer Benutzer?';
        $strings['CreateAnAccount'] = 'Konto hinzufügen';
        $strings['ViewSchedule'] = 'Terminplan ansehen';
        $strings['ForgotMyPassword'] = 'Kennwort vergessen';
        $strings['YouWillBeEmailedANewPassword'] = 'Sie bekommen ein neues, zufälliges Kennwort zugeschickt';
        $strings['Close'] = 'Schliessen';
        $strings['ExportToCSV'] = 'Export als CSV';
        $strings['OK'] = 'OK';
        $strings['Working'] = 'Arbeite';
        $strings['Login'] = 'Login';
        $strings['AdditionalInformation'] = 'Zusätzliche Informationen';
        $strings['AllFieldsAreRequired'] = 'Alle Felder werden benötigt';
        $strings['Optional'] = 'optional';
        $strings['YourProfileWasUpdated'] = 'Ihr Profil wurde aktualisiert';
        $strings['YourSettingsWereUpdated'] = 'Ihre Einstellungen wurden aktualisiert';
        $strings['Register'] = 'Registrieren';
        $strings['SecurityCode'] = 'Sicherheitscode';
        $strings['ReservationCreatedPreference'] = 'Wenn ich eine Reservierung tätige oder eine Reservierung in meinem Auftrag getätigt wird';
        $strings['ReservationUpdatedPreference'] = 'Wenn ich eine Reservierung aktualisiere oder eine Reservierung in meinem Auftrag aktualisiert wird';
        $strings['ReservationDeletedPreference'] = 'Wenn ich eine Reservierung lösche oder eine Reservierung in meinem Auftrag gelöscht wird';
        $strings['ReservationApprovalPreference'] = 'Wenn meine bevorstehende Reservierung freigegeben wird';
        $strings['PreferenceSendEmail'] = 'Email senden';
        $strings['PreferenceNoEmail'] = 'Mich nicht informieren';
        $strings['ReservationCreated'] = 'Ihre Reservierung wurde erfolgreich angelegt!';
        $strings['ReservationUpdated'] = 'Ihre Reservierung wurde erfolgreich aktualisiert!';
        $strings['ReservationRemoved'] = 'Ihre Reservierung wurde erfolgreich gelöscht';
        $strings['YourReferenceNumber'] = 'Ihre Referenznummer ist %s';
        $strings['UpdatingReservation'] = 'Aktualisiere Reservierung';
        $strings['ChangeUser'] = 'Benutzer ändern';
        $strings['MoreResources'] = 'Weitere Ressourcen';
        $strings['ReservationLength'] = 'Reservierungslänge';
        $strings['ParticipantList'] = 'Teilnehmerliste';
        $strings['AddParticipants'] = 'Teilnehmer hinzufügen';
        $strings['InviteOthers'] = 'Weitere einladen';
        $strings['AddResources'] = 'Ressourcen hinzufügen';
        $strings['AddAccessories'] = 'Zubehör hinzufügen';
        $strings['Accessory'] = 'Zubehör';
        $strings['QuantityRequested'] = 'Menge angefordert';
        $strings['CreatingReservation'] = 'Lege Reservierung an';
        $strings['UpdatingReservation'] = 'Aktualisiere Reservierung';
        $strings['DeleteWarning'] = 'Diese Aktion kann nicht rückgängig gemacht werden!';
        $strings['DeleteAccessoryWarning'] = 'Beim löschen wird diese Zubehör auch aus sämtlichen Reservierungen gelöscht.';
        $strings['AddAccessory'] = 'Zubehör hinzufügen';
        $strings['AddBlackout'] = 'Sperrzeit hinzufügen';
        $strings['AllResourcesOn'] = 'Alle Ressourcen Ein';
        $strings['Reason'] = 'Grund';
        $strings['BlackoutShowMe'] = 'Zeige in Konflikt stehende Reservierungen';
        $strings['BlackoutDeleteConflicts'] = 'Lösche in Konflikt stehende Reservierungen';
        $strings['Filter'] = 'Filter';
        $strings['Between'] = 'Zwischen';
        $strings['CreatedBy'] = 'Erzeugt von';
        $strings['BlackoutCreated'] = 'Sperrzeit angelegt!';
        $strings['BlackoutNotCreated'] = 'Sperrzeit konnte nicht angelegt werden!';
        $strings['BlackoutConflicts'] = 'Sperrzeiten stehen im Konflikt zueinander';
        $strings['ReservationConflicts'] = 'Reservierungszeiten stehen im Konflikt zueinander';
        $strings['UsersInGroup'] = 'Benutzer in dieser Gruppe';
        $strings['Browse'] = 'Durchsuchen';
        $strings['DeleteGroupWarning'] = 'Beim löschen dieser Gruppe werden alle verknüpften Berechtigungen gelöscht.  Benutzer in dieser Gruppe werden die Berechtigungen zu den Ressourcen verlieren.';
        $strings['WhatRolesApplyToThisGroup'] = 'Welche Rollen sollen der Gruppe zugewiesen werden?';
        $strings['WhoCanManageThisGroup'] = 'Wer darf diese Gruppe verwalten?';
        $strings['WhoCanManageThisSchedule'] = 'Wer darf diesen Termin verwalten?';
        $strings['AddGroup'] = 'Gruppe hinzufügen';
        $strings['AllQuotas'] = 'Alle Zeitkontingente';
        $strings['QuotaReminder'] = 'Beachte: Zeitkontingente werden basierend auf der Zeitzone des Terminplans erzwungen';
        $strings['AllReservations'] = 'Alle Reservierungen';
        $strings['PendingReservations'] = 'Anstehende Reservierungen';
        $strings['Approving'] = 'Anerkennen';
        $strings['MoveToSchedule'] = 'Zum Terminplan verschieben';
        $strings['DeleteResourceWarning'] = 'Beim löschen dieser Ressource werden alle verknüpften Daten gelöscht, inklusive';
        $strings['DeleteResourceWarningReservations'] = 'alle in Verbindung stehenden Reservierungen';
        $strings['DeleteResourceWarningPermissions'] = 'alle zugewiesenen Berechtigungen';
        $strings['DeleteResourceWarningReassign'] = 'Bitte alles erneut hinzufügen, was nicht gelöscht werden soll';
        $strings['ScheduleLayout'] = 'Layout (Alle Zeiten %s)';
        $strings['ReservableTimeSlots'] = 'Buchbare Zeitschlitze';
        $strings['BlockedTimeSlots'] = 'Geblockte Zeitschlitze';
        $strings['ThisIsTheDefaultSchedule'] = 'Dies ist der Standard Terminplan';
        $strings['DefaultScheduleCannotBeDeleted'] = 'Der Standard Terminplan kann nicht gelöscht werden';
        $strings['MakeDefault'] = 'Als Standard';
        $strings['BringDown'] = 'Nach Unten';
        $strings['ChangeLayout'] = 'Layout ändern';
        $strings['AddSchedule'] = 'Terminplan hinzufügen';
        $strings['StartsOn'] = 'Beginnt um';
        $strings['NumberOfDaysVisible'] = 'Anzahl der sichtbaren Tage';
        $strings['UseSameLayoutAs'] = 'Gleiches Layout verwenden wie';
        $strings['Format'] = 'Format';
        $strings['OptionalLabel'] = 'Optionales Etikett';
        $strings['LayoutInstructions'] = 'Gebe einen Zeitschlitz pro Zeile ein. Zeitschlitze müssen für alle 24 Stunden eines Tages vorgegeben werden, von und bis 0 Uhr.';
        $strings['AddUser'] = 'Benutzer hinzufügen';
        $strings['UserPermissionInfo'] = 'Aktueller Zugriff zur Ressource unterscheidet sich in Abhängigkeit der Benutzerrolle, der Gruppenberechtigungen oder externer Zugriffseinstellungen';
        $strings['DeleteUserWarning'] = 'Das Löschen des Benutzers führt auch zum Entfernen seiner momentanen, zukünftigen und vergangenen Reservierungen.';
        $strings['AddAnnouncement'] = 'Ankündigung hinzufügen';
        $strings['Announcement'] = 'Ankündigung';
        $strings['Priority'] = 'Priorität';
        $strings['Reservable'] = 'reservierbar';
        $strings['Unreservable'] = 'nicht reservierbar';
        $strings['Reserved'] = 'reserviert';
        $strings['MyReservation'] = 'Meine Reservierung';
        $strings['Pending'] = 'Unbestätigt';
        $strings['Past'] = 'Vergangen';
        $strings['Restricted'] = 'Beschränkt';
        $strings['ViewAll'] = 'Alle anzeigen';
        $strings['MoveResourcesAndReservations'] = 'Ressourcen und Reservierungen verschieben nach';
        $strings['TurnOffSubscription'] = 'Kalender Abonnement abschalten';
        $strings['TurnOnSubscription'] = 'Kalender Abonnement erlauben';
        $strings['SubscribeToCalendar'] = 'Kalender abonnieren';
        $strings['SubscriptionsAreDisabled'] = 'Das abonnieren des Kalenders wurde vom Administrator deaktiviert';
        $strings['NoResourceAdministratorLabel'] = '(Kein Ressourcen Administrator)';
        $strings['WhoCanManageThisResource'] = 'Wer darf diese Ressource verwalten?';
        $strings['ResourceAdministrator'] = 'Ressourcen Administrator';
        $strings['Private'] = 'Privat';
        $strings['Accept'] = 'Akzeptieren';
        $strings['Decline'] = 'Ablehnen';
        $strings['ShowFullWeek'] = 'Ganze Woche anzeigen';
        $strings['CustomAttributes'] = 'Benutzerdefinierte Attribute';
        $strings['AddAttribute'] = 'Attribut hinzufügen';
        $strings['EditAttribute'] = 'Attribut ändern';
        $strings['DisplayLabel'] = 'Angezeigter Feldname';
        $strings['Type'] = 'Typ';
        $strings['Required'] = 'Erforderlich';
        $strings['ValidationExpression'] = 'Validierungsausdruck';
        $strings['PossibleValues'] = 'Mögliche Werte';
        $strings['SingleLineTextbox'] = 'Einzeilige Textbox';
        $strings['MultiLineTextbox'] = 'Mehrzeilige Textbox';
        $strings['Checkbox'] = 'Checkbox';
        $strings['SelectList'] = 'Auswahlliste';
        $strings['CommaSeparated'] = 'Komma separiert';
        $strings['Category'] = 'Kategorie';
        $strings['CategoryReservation'] = 'Reservierung';
        $strings['CategoryGroup'] = 'Gruppe';
        $strings['SortOrder'] = 'Sortierung';
        $strings['Title'] = 'Titel';
        $strings['AdditionalAttributes'] = 'Zusätzliche Attribute';
        $strings['True'] = 'Wahr';
        $strings['False'] = 'Falsch';
	$strings['ForgotPasswordEmailSent'] = 'Eine EMail zum Zurücksetzen Ihres Passworts ist an Ihre Adresse gesendet worden';
	$strings['ActivationEmailSent'] = 'Sie werden in Kürze eine Aktivierungsemail erhalten.';
	$strings['AccountActivationError'] = 'Sorry, wir können Ihr Konto nicht aktivieren.';
	$strings['Attachments'] = 'Anhänge';
	$strings['AttachFile'] = 'Datei hinzufügen';
	$strings['Maximum'] = 'max';
	$strings['NoScheduleAdministratorLabel'] = 'Kein Termin Administrator';
	$strings['ScheduleAdministrator'] = 'Termin Administrator';
	$strings['Total'] = 'Total';
	$strings['QuantityReserved'] = 'Reservierte Menge';
	$strings['AllAccessories'] = 'Alle Zubehörteile';
	$strings['GetReport'] = 'Bericht anfordern';
	$strings['NoResultsFound'] = 'Keine passenden Ergebnisse gefunden';
	$strings['SaveThisReport'] = 'Diesen Bericht speichern';
	$strings['ReportSaved'] = 'Bericht gespeichert!';
	$strings['EmailReport'] = 'Email den Bericht';
	$strings['ReportSent'] = 'Bericht gesendet!';
	$strings['RunReport'] = 'Bericht ausführen';
	$strings['NoSavedReports'] = 'Sie haben keine Berichte gespeichert.';
	$strings['CurrentWeek'] = 'Diese Woche';
	$strings['CurrentMonth'] = 'Dieser Monat';
	$strings['AllTime'] = 'Alle Zeiträume';
	$strings['FilterBy'] = 'Filtern von';
	$strings['Select'] = 'Auswahl';
	$strings['List'] = 'Liste';
	$strings['TotalTime'] = 'Gesamtzeit';
	$strings['Count'] = 'Anzahl';
	$strings['Usage'] = 'Benutzung';
	$strings['AggregateBy'] = 'Summieren von';
	$strings['Range'] = 'Bereich';
	$strings['Choose'] = 'Auswahl';
	$strings['All'] = 'Alle';
	$strings['ViewAsChart'] = 'Darstellung als Diagramm';
	$strings['ReservedResources'] = 'Reservierte Ressourcen';
	$strings['ReservedAccessories'] = 'Reserviertes Zubehör';
	$strings['ResourceUsageTimeBooked'] = 'Ressourcen Verwendung - Gebuchte Zeit';
	$strings['ResourceUsageReservationCount'] = 'Ressourcen Verwendung - Reservierungszähler';
	$strings['Top20UsersTimeBooked'] = 'Top 20 Benutzer - Gebuchte Zeit';
	$strings['Top20UsersReservationCount'] = 'Top 20 Benutzer - Reservierungszähler';
        $strings['ConfigurationUpdated'] = 'Konfigurationsdatei wurde upgedated';
        $strings['ConfigurationUiNotEnabled'] = 'Auf diese Seite kann nicht zugegriffen werden, da $conf[\'settings\'][\'pages\'][\'enable.configuration\'] auf false gesetzt wurde oder fehlt.';
        $strings['ConfigurationFileNotWritable'] = 'Die Konfigurationsdatei ist nicht beschreibbar. Bitte überprüfen Sie die Berechtigungen dieser Datei und versuchen Sie es erneut.';
        $strings['ConfigurationUpdateHelp'] = 'Siehe den Abschnitt Konfiguration der <a target=_blank href=%s> Hilfe-Datei </ a> für die Dokumentation zu diesen Einstellungen.';
        $strings['GeneralConfigSettings'] = 'Einstellungen';
	$strings['UseSameLayoutForAllDays'] = 'Verwende gleiches Layout für alle Tage';
	$strings['LayoutVariesByDay'] = 'Layout variiert jeden Tag';
	$strings['ManageReminders'] = 'Erinnerungen';
        $strings['ReminderUser'] = 'Benutzer ID';
        $strings['ReminderMessage'] = 'Nachricht';
        $strings['ReminderAddress'] = 'Emailadressen';
        $strings['ReminderSendtime'] = 'Absendezeit';
        $strings['ReminderRefNumber'] = 'Reservierungs Referenz Nummer';
        $strings['ReminderSendtimeDate'] = 'Tag der Erinnerung';
        $strings['ReminderSendtimeTime'] = 'Zeit der Erinnerung (HH:MM)';
        $strings['ReminderSendtimeAMPM'] = 'AM / PM';
        $strings['AddReminder'] = 'Erinnerung hinzufügen';
        $strings['DeleteReminderWarning'] = 'Sind Sie sicher?';
        $strings['NoReminders'] = 'Sie haben keine kommenden Erinnerungen.';
        $strings['Reminders'] = 'Erinnerung';
        $strings['SendReminder'] = 'Sende Erinnerung';
        $strings['minutes'] = 'Minuten';
        $strings['hours'] = 'Stunden';
        $strings['days'] = 'Tage';
        $strings['ReminderBeforeStart'] = 'vor dem Beginn';
        $strings['ReminderBeforeEnd'] = 'vor dem Ende';
        $strings['Logo'] = 'Logo';
        $strings['CssFile'] = 'CSS Datei';
        $strings['ThemeUploadSuccess'] = 'Ihre Änderungen wurden gespeichert. Aktualisieren Sie die Seite, damit die Änderungen wirksam werden.';
        $strings['MakeDefaultSchedule'] = 'Mache dies zu meinem standard Terminplan';
        $strings['DefaultScheduleSet'] = 'Dies ist nun Ihr standard Terminplan';
        $strings['FlipSchedule'] = 'Terminplan Layout umstellen';
        $strings['Next'] = 'Nächste';
	$strings['Success'] = 'Erfolgreich';
        // End Strings

	// Install
		$strings['InstallApplication'] = 'Install phpScheduleIt (MySQL only)';
		$strings['IncorrectInstallPassword'] = 'Sorry, that password was incorrect.';
		$strings['SetInstallPassword'] = 'You must set an install password before the installation can be run.';
		$strings['InstallPasswordInstructions'] = 'In %s please set %s to a password which is random and difficult to guess, then return to this page.<br/>You can use %s';
		$strings['NoUpgradeNeeded'] = 'There is no upgrade needed. Running the installation process will delete all existing data and install a new copy of phpScheduleIt!';
		$strings['ProvideInstallPassword'] = 'Please provide your installation password.';
		$strings['InstallPasswordLocation'] = 'This can be found at %s in %s.';
		$strings['VerifyInstallSettings'] = 'Verify the following default settings before continuing. Or you can change them in %s.';
		$strings['DatabaseName'] = 'Database Name';
		$strings['DatabaseUser'] = 'Database User';
		$strings['DatabaseHost'] = 'Database Host';
		$strings['DatabaseCredentials'] = 'You must provide credentials of a MySQL user who has privileges to create databases. If you do not know, contact your database admin. In many cases, root will work.';
		$strings['MySQLUser'] = 'MySQL User';
		$strings['InstallOptionsWarning'] = 'The following options will probably not work in a hosted environment. If you are installing in a hosted environment, use the MySQL wizard tools to complete these steps.';
		$strings['CreateDatabase'] = 'Create the database';
		$strings['CreateDatabaseUser'] = 'Create the database user';
		$strings['PopulateExampleData'] = 'Import sample data. Creates admin account: admin/password and user account: user/password';
		$strings['DataWipeWarning'] = 'Warning: This will delete any existing data';
		$strings['RunInstallation'] = 'Run Installation';
		$strings['UpgradeNotice'] = 'You are upgrading from version <b>%s</b> to version <b>%s</b>';
		$strings['RunUpgrade'] = 'Run Upgrade';
		$strings['Executing'] = 'Executing';
		$strings['StatementFailed'] = 'Failed. Details:';
		$strings['SQLStatement'] = 'SQL Statement:';
		$strings['ErrorCode'] = 'Error Code:';
		$strings['ErrorText'] = 'Error Text:';
		$strings['InstallationSuccess'] = 'Installation completed successfully!';
		$strings['RegisterAdminUser'] = 'Register your admin user. This is required if you did not import the sample data. Ensure that $conf[\'settings\'][\'allow.self.registration\'] = \'true\' in your %s file.';
		$strings['LoginWithSampleAccounts'] = 'If you imported the sample data, you can log in with admin/password for admin user or user/password for basic user.';
		$strings['InstalledVersion'] = 'You are now running version %s of phpScheduleIt';
		$strings['InstallUpgradeConfig'] = 'It is recommended to upgrade your config file';
		$strings['InstallationFailure'] = 'There were problems with the installation.  Please correct them and retry the installation.';
		$strings['ConfigureApplication'] = 'Configure phpScheduleIt';
		$strings['ConfigUpdateSuccess'] = 'Your config file is now up to date!';
		$strings['ConfigUpdateFailure'] = 'We could not automatically update your config file. Please overwrite the contents of config.php with the following:';
	// End Install

        // Errors
        $strings['LoginError'] = 'Benutzername oder Kennwort falsch';
        $strings['ReservationFailed'] = 'Ihre Reservierung konnte nicht angelegt werden';
        $strings['MinNoticeError'] = 'Diese Reservierung benötigt eine Vorankündigung. Der früheste zu reservierende Zeitpunkt ist %s.';
        $strings['MaxNoticeError'] = 'Die Reservierung liegt zu weit in der Zukunft. Der späteste Zeitpunkt ist %s.';
        $strings['MinDurationError'] = 'Diese Reservierung muss mindestens %s dauern.';
        $strings['MaxDurationError'] = 'Diese Reservierung kann nicht länger als %s dauern.';
        $strings['ConflictingAccessoryDates'] = 'Es gibt nicht genug der folgenden Zubehörteile:';
        $strings['NoResourcePermission'] = 'Sie haben keine Berechtigung für eine oder mehrere der angefragten Ressourcen';
        $strings['ConflictingReservationDates'] = 'Es gibt in Konflikt stehende Reservierungen an folgenden Tagen:';
        $strings['StartDateBeforeEndDateRule'] = 'Der Startzeitpunkt muss vor dem Endzeitpunkt liegen';
        $strings['StartIsInPast'] = 'Der Startzeitpunkt darf nicht in der Vergangenheit liegen';
        $strings['EmailDisabled'] = 'Emailbenachrichtigngen wurden vom Administrator deaktiviert';
        $strings['ValidLayoutRequired'] = 'Zeitschlitze müssen für alle 24 Stunden eines Tages vorgegeben werden, von und bis 0 Uhr.';
        $strings['CustomAttributeErrors'] = 'Es gibt Probleme mit den von Ihnen hinzugefügten Attributen:';
        $strings['CustomAttributeRequired'] = '%s ist ein Pflichtfeld';
        $strings['CustomAttributeInvalid'] = 'Der Wert für %s ist ungültig';
        $strings['AttachmentLoadingError'] = 'Sorry, es gab ein Problem beim Laden der angeforderten Datei.';
        $strings['InvalidAttachmentExtension'] = 'Sie können nur Dateien diese Typs hochladen: %s';
	$strings['InvalidStartSlot'] = 'Die angeforderte Startzeit ist nicht gültig.';
	$strings['InvalidEndSlot'] = 'Die angeforderte Endzeit ist nicht gültig.';
	$strings['MaxParticipantsError'] = '%s ist für maximal %s Teilnehmer.';
	$strings['ReservationCriticalError'] = 'Es kam ein kritischer Fehler beim Speichern Ihrer Reservierung. Wenn das so weitergeht, wenden Sie sich an Ihren Systemadministrator.';
	$strings['InvalidStartReminderTime'] = 'Ungültige Start-Erinnerungszeit.';
	$strings['InvalidEndReminderTime'] = 'Ungültige End-Erinnerungszeit.';
        // End Errors

        // Page Titles
        $strings['CreateReservation'] = 'Reservierung anlegen';
        $strings['EditReservation'] = 'Reservierung bearbeiten';
        $strings['LogIn'] = 'Anmelden';
        $strings['ManageReservations'] = 'Reservierungen';
        $strings['AwaitingActivation'] = 'Erwarte Aktivierung';
        $strings['PendingApproval'] = 'Ausstehende Genehmigung';
        $strings['ManageSchedules'] = 'Terminpläne';
        $strings['ManageResources'] = 'Ressourcen';
        $strings['ManageAccessories'] = 'Zubehör';
        $strings['ManageUsers'] = 'Benutzer';
        $strings['ManageGroups'] = 'Gruppen';
        $strings['ManageQuotas'] = 'Zeitkontingente';
        $strings['ManageBlackouts'] = 'Sperrzeiten verwalten';
        $strings['MyDashboard'] = 'Meine Übersicht';
        $strings['ServerSettings'] = 'Server Einstellungen';
        $strings['Dashboard'] = 'Übersicht';
        $strings['Help'] = 'Hilfe';
        $strings['Administration'] = 'Administration';
        $strings['About'] = 'Über';
        $strings['Bookings'] = 'Buchungen';
        $strings['Schedule'] = 'Terminplan';
        $strings['Reservations'] = 'Reservierungen';
        $strings['Account'] = 'Konto';
        $strings['EditProfile'] = 'Mein Profil bearbeiten';
        $strings['FindAnOpening'] = 'Einen Anfang finden';
        $strings['OpenInvitations'] = 'Offene Einladungen';
        $strings['MyCalendar'] = 'Mein Kalender';
        $strings['ResourceCalendar'] = 'Ressourcen Kalender';
        $strings['Reservation'] = 'Neue Reservierung';
        $strings['Install'] = 'Installation';
        $strings['ChangePassword'] = 'Kennwort ändern';
        $strings['MyAccount'] = 'Mein Konto';
        $strings['Profile'] = 'Profil';
        $strings['ApplicationManagement'] = 'Anwendungsverwaltung';
        $strings['ForgotPassword'] = 'Kennwort vergessen';
        $strings['NotificationPreferences'] = 'Benachrichtigungseinstellungen';
        $strings['ManageAnnouncements'] = 'Ankündigungen';
        $strings['Responsibilities'] = 'Verantwortlichkeiten';
        $strings['GroupReservations'] = 'Gruppenreservierungen';
        $strings['ResourceReservations'] = 'Ressourcen Reservierungen';
        $strings['Customization'] = 'Anpassungen';
        $strings['Attributes'] = 'Attribute';
	$strings['AccountActivation'] = 'Konto Aktivierung';
	$strings['ScheduleReservations'] = 'Reservierungsplanung';
	$strings['Reports'] = 'Berichte';
	$strings['GenerateReport'] = 'Neuen Bericht erstellen';
	$strings['MySavedReports'] = 'Meine gespeicherten Berichte';
	$strings['CommonReports'] = 'Standard Berichte';
	$strings['ViewDay'] = 'Zeige Tag';
	$strings['Group'] = 'Gruppe';
        // End Page Titles

        // Day representations
        $strings['DaySundaySingle'] = 'S';
        $strings['DayMondaySingle'] = 'M';
        $strings['DayTuesdaySingle'] = 'D';
        $strings['DayWednesdaySingle'] = 'M';
        $strings['DayThursdaySingle'] = 'D';
        $strings['DayFridaySingle'] = 'F';
        $strings['DaySaturdaySingle'] = 'S';

        $strings['DaySundayAbbr'] = 'So';
        $strings['DayMondayAbbr'] = 'Mo';
        $strings['DayTuesdayAbbr'] = 'Di';
        $strings['DayWednesdayAbbr'] = 'Mi';
        $strings['DayThursdayAbbr'] = 'Do';
        $strings['DayFridayAbbr'] = 'Fr';
        $strings['DaySaturdayAbbr'] = 'Sa';
		// End Day representations

        // Email Subjects
        $strings['ReservationApprovedSubject'] = 'Ihre Reservierung wurde genehmigt';
        $strings['ReservationCreatedSubject'] = 'Ihre Reservierung wurde angelegt';
        $strings['ReservationUpdatedSubject'] = 'Ihre Reservierung wurde aktualisiert';
        $strings['ReservationDeletedSubject'] = 'Ihre Reservierung wurde gelöscht';
        $strings['ReservationCreatedAdminSubject'] = 'Benachrichtigung: Eine Reservierung wurde angelegt';
        $strings['ReservationUpdatedAdminSubject'] = 'Benachrichtigung: Eine Reservierung wurde aktualisiert';
        $strings['ReservationDeleteAdminSubject'] = 'Benachrichtigung: Eine Reservierung wurde gelöscht';
        $strings['ParticipantAddedSubject'] = 'Reservierung Teilnahme Benachrichtigung';
        $strings['ParticipantDeletedSubject'] = 'Reservierung gelöscht';
        $strings['InviteeAddedSubject'] = 'Reservierungs Einladung';
        $strings['ResetPassword'] = 'Kennwort zurücksetzen Anfrage';
        $strings['ActivateYourAccount'] = 'Bitte aktivieren Sie Ihr Konto';
        $strings['ReportSubject'] = 'Ihr angeforderter Bericht (%s)';
	$strings['ReservationStartingSoonSubject'] = 'Ihre Reservierung für %s beginnt bald';
	$strings['ReservationEndingSoonSubject'] = 'Ihre Reservierung für %s endet bald';
        // End Email Subjects

        $this->Strings = $strings;

        return $this->Strings;
    }

    /**
     * @return array
     */
    protected function _LoadDays()
    {
	$days = parent::_LoadDays();

        /***
        DAY NAMES
        All of these arrays MUST start with Sunday as the first element
        and go through the seven day week, ending on Saturday
         ***/
        // The full day name
        $days['full'] = array('Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag');
        // The three letter abbreviation
        $days['abbr'] = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
        // The two letter abbreviation
        $days['two'] = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
        // The one letter abbreviation
        $days['letter'] = array('S', 'M', 'D', 'M', 'D', 'F', 'S');

        $this->Days = $days;

        return $this->Days;
    }

    /**
     * @return array
     */
    protected function _LoadMonths()
    {
		$months = parent::_LoadMonths();

        /***
        MONTH NAMES
        All of these arrays MUST start with January as the first element
        and go through the twelve months of the year, ending on December
         ***/
        // The full month name
        $months['full'] = array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
        // The three letter month name
        $months['abbr'] = array('Jan', 'Feb', 'Mrz', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');

        $this->Months = $months;

        return $this->Months;
    }

    /**
     * @return array
     */
    protected function _LoadLetters()
    {
        $this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

        return $this->Letters;
    }

    protected function _GetHtmlLangCode()
    {
        return 'de';
    }
}

?>
