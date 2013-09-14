<?php

// Language definitions used in admin-groups.php
$lang_admin_groups = array(

'Must enter title message'		=>	'Du skal indstaste et navn for gruppen.',
'Title already exists message'	=>	'Der er allerede en gruppe ved navn <strong>%s</strong>.',
'Default group redirect'		=>	'Standard gruppe sat. Omdiregere …',
'Cannot remove default message'	=>	'Standard gruppen kan ikke fjernes. For at slette denne gruppe, skal du først vælge en anden gruppe som standard.',
'Group removed redirect'		=>	'Gruppe slettet. Omdiregere …',
'Group added redirect'			=>	'Gruppe tilføjet. Omdiregere …',
'Group edited redirect'			=>	'Gruppe redigeret. Omdiregere …',

'Add groups head'				=>	'Tilføj/konfigurer grupper',
'Add group subhead'				=>	'Tilføj ny gruppe',
'New group label'				=>	'Baser ny gruppe på',
'New group help'				=>	'Vælg en brugergruppe som den nye gruppe skal arve rettighedsindstillingerne fra. På den næste side for du mulighed for at finjustere indstillingerne.',
'Default group subhead'			=>	'Indstil standard gruppe',
'Default group label'			=>	'Standard gruppe',
'Default group help'			=>	'Dette er standard bruger gruppen, f.eks. Den gruppe nye brugere bliver placeret i når de registrerer. For sikkerhedsgrunde, kan brugere ikke blive placeret i enten moderator eller administrator gruppen som standard.',
'Existing groups head'			=>	'Eksisterende grupper',
'Edit groups subhead'			=>	'Rediger/slet grupper',
'Edit groups info'				=>	'De foruddefineret grupper Gæst, Administratorer, Moderatorer og Medlemmer kan ikke slettes. De kan dog redigeres. Venligst bemærk at der i nogen grupper er muligheder som ikke er tilgænglige (f.eks. <em>rediger postering</em> rettigheden for gæster). Administratorer har altid globale rettigheder.',
'Edit link'						=>	'Rediger',
'Delete link'					=>	'Slet',
'Group delete head'				=>	'Slet gruppe',
'Confirm delete subhead'		=>	'Bekræft sletning af gruppe',
'Confirm delete info'			=>	'Er du sikker på at du ønsker at slette gruppen <strong>%s</strong>?',
'Confirm delete warn'			=>	'ADVARSEL! Hvis du sletter gruppen kan den ikke genskabes.',
'Delete group head'				=>	'Slet gruppe',
'Move users subhead'			=>	'Flyt brugere i gruppen',
'Move users info'				=>	'Gruppen <strong>%s</strong> har i øjeblikket <strong>%s</strong> medlemmer. Venligst, vælg en gruppe hvor disse medlemmer skal flyttes til efter gruppen er slettet.',
'Move users label'				=>	'Flyt brugere til',
'Delete group'					=>	'Slet gruppe',

'Group settings head'			=>	'Gruppe indstillinger',
'Group settings subhead'		=>	'Indstil gruppe muligheder og rettigheder',
'Group settings info'			=>	'Nedefor er standard indstillinger og rettigheder for brugergruppen. Disse indstilliger gælder hvis ingen forum specifikke rettigheder er specificeret.',
'Group title label'				=>	'Gruppe titel',
'User title label'				=>	'Bruger titel',
'User title help'				=>	'Rankering som brugere i denne gruppe har opnået. Efterlad feltet blankt for at bruge standard titel ("%s").',
'Promote users label'			=>	'Fremhæv brugere',
'Promote users help'			=>	'Du kan fremhæve brugere i en ny gruppe automatisk hvis de opnår et bestemt antal posteringer. Vælg "%s" for at deaktivere. For sikkerhedsgrunde, er du ikke tilladt at vælge en administrator gruppe her. bemærk at gruppe ændringer ikke påvirker brugerne før deres næste postering.',
'Disable promotion'				=>	'Deaktiver fremhævning',
'Mod privileges label'			=>	'Tillad brugere moderatorrettigheder',
'Mod privileges help'			=>	'For at en bruger i denne gruppe skal have moderator evner, skal han/hun tildeles moderatorrettigheder til et eller flere fora. Dette gøres via brugeradministrations siden på brugerens profil.',
'Edit profile label'			=>	'Tillad moderatorer at redigere brugerprofiler',
'Edit profile help'				=>	'Hvis moderatorrettigheder er aktiveret, kan brugere i denne gruppe redigere brugerprofiler.',
'Rename users label'			=>	'Tillad moderatorer at omdøbe brugere',
'Rename users help'				=>	'Hvis moderatorrettigheder er aktiveret, kan brugere i denne gruppe at omdøbe brugere.',
'Change passwords label'		=>	'Tillad moderatorer at ændre adgangskoder',
'Change passwords help'			=>	'Hvis moderatorrettigheder er aktiveret, kan brugere i denne gruppe ændre brugernes adgangskoder.',
'Ban users label'				=>	'Tillad moderatorer at banlyse brugere',
'Ban users help'				=>	'Hvis moderatorrettigheder er aktiveret, kan brugere i denne gruppe banlyse andre brugere.',
'Read board label'				=>	'Læs board',
'Read board help'				=>	'Tillad brugere i denne gruppe at se boardet. Denne indstilling gælder for alle aspekter af boardet og kan derfor ikke tilsidesættes af forum specifikke indstillinger. Hvis dette er sat til "Nej", vil brugerne i denne gruppe kun være i stand til at logge ind / logge ud og registrere.',
'View user info label'			=>	'Vis bruger oplysninger',
'View user info help'			=>	'Tillad brugere at se listen over brugere og brugerprofiler.',
'Post replies label'			=>	'Skriv svar',
'Post replies help'				=>	'Tillad brugere i denne gruppe at skrive svar i emner.',
'Post topics label'				=>	'Skriv emner',
'Post topics help'				=>	'Tillad brugere i denne gruppe at indsende nye emner.',
'Edit posts label'				=>	'Rediger indlæg',
'Edit posts help'				=>	'Tillad brugere i denne gruppe at redigere deres egne indlæg.',
'Delete posts label'			=>	'Slet indlæg',
'Delete posts help'				=>	'Tillad brugere i denne gruppe at slette deres egne indlæg.',
'Delete topics label'			=>	'Slet emner',
'Delete topics help'			=>	'Tillad brugere i denne gruppe at slette deres egne emner (herunder eventuelle svar).',
'Post links label'				=>	'Poster links',
'Post links help'				=>	'Tillad brugere i denne gruppe at inkludere links i deres indlæg. Denne indstilling gælder også for signaturer og hjemmeside feltet i brugernes profiler.',
'Set own title label'			=>	'Indstil egen bruger titel',
'Set own title help'			=>	'Tillad brugere i denne gruppe at indstille deres egen bruger titel.',
'User search label'				=>	'Brug søgning',
'User search help'				=>	'Tillad brugere i denne gruppe at bruge søgefunktionen.',
'User list search label'		=>	'Søg i brugerlisten',
'User list search help'			=>	'Tillad brugere i denne gruppe at bruge fritekstsøgning for brugere i brugerlisten.',
'Send e-mails label'			=>	'Send e-mails',
'Send e-mails help'				=>	'Tillad brugere i denne gruppe at sende e-mails til andre brugere.',
'Post flood label'				=>	'Indlæg overflodsinterval',
'Post flood help'				=>	'Antal sekunder, at brugerne i denne gruppe er nød til at vente mellem indlæg. Sæt til 0 for at deaktivere.',
'Search flood label'			=>	'Søgnings overflodsinterval',
'Search flood help'				=>	'Antal sekunder, at brugerne i denne gruppe er nød til at vente mellem søgninger. Sæt til 0 for at deaktivere.',
'E-mail flood label'			=>	'Email overflodsinterval',
'E-mail flood help'				=>	'Antal sekunder, at brugerne i denne gruppe er nød til at vente mellem e-mails. Sæt til 0 for at deaktivere.',
'Report flood label'			=>	'Rapport overflodsinterval',
'Report flood help'				=>	'Antal sekunder, at brugerne i denne gruppe er nød til at vente mellem rapporter. Sæt til 0 for at deaktivere.',
'Moderator info'				=>	'Bemærk, for at en bruger i denne gruppe skal have moderator evner, han / hun skal tildeles til at moderere ét eller flere fora. Dette gøres via brugeradministrationssiden på brugerens profil.',

);