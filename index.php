<?php
/**
 * GDPR/Regulatory Playbook 2026 (Sweden)
 * Single-file production-ready experience.
 */

declare(strict_types=1);

$updatedAt = '2026-01-15';

$domains = [
    [
        'id' => 'data-protection',
        'title' => 'Dataskydd & integritet',
        'color' => '#79f2ff',
        'summary' => 'Regler som styr personuppgifter, cookies, spårning, profilering och överföringar.',
        'frameworks' => [
            [
                'name' => 'GDPR (EU) 2016/679',
                'description' => 'Grundregelverket för all behandling av personuppgifter inom EU/EES.',
                'why' => 'Nästan varje webbprojekt behandlar personuppgifter via formulär, analys, inloggning eller cookies.',
                'actions' => [
                    'Genomför och dokumentera rättslig grund per behandling (samtycke, avtal, berättigat intresse m.m.).',
                    'Bygg dataminimering i datamodellen (minsta möjliga fält, tydliga retention policies).',
                    'Implementera privacy by design: pseudonymisering, åtkomstkontroller, kryptering i transit/vila.',
                    'Skapa stöd för registrerades rättigheter: export, rättelse, radering, invändning, dataportabilitet.',
                    'Föra register över behandlingar och koppla systemkomponenter till varje behandling.',
                ],
                'risk' => 'Sanktionsavgifter upp till 20 miljoner euro eller 4 % av global omsättning, skadestånd och förelägganden.',
                'level' => 'critical',
            ],
            [
                'name' => 'Dataskyddslagen (SFS 2018:218)',
                'description' => 'Svenska kompletterande bestämmelser till GDPR.',
                'why' => 'Påverkar nationella undantag, myndighetskontakt och praxis i Sverige.',
                'actions' => [
                    'Verkställ svenska åldersgränser och nationella undantag i processer för samtycke.',
                    'Säkerställ rutiner för Integritetsskyddsmyndighetens (IMY) förfrågningar och tillsynsärenden.',
                    'Dokumentera personuppgiftsansvarig kontra biträde i svenska avtal.',
                ],
                'risk' => 'Nationell tillsyn, sanktionsavgifter och förelägganden att stoppa behandling.',
                'level' => 'high',
            ],
            [
                'name' => 'ePrivacy-direktivet (2002/58/EG) via LEK',
                'description' => 'Regler för cookies, terminalutrustning och elektronisk kommunikation.',
                'why' => 'Cookie banners, tracking-script och marketing tags är ofta felimplementerade.',
                'actions' => [
                    'Blockera icke-nödvändiga cookies/scripts tills giltigt samtycke erhållits.',
                    'Bygg granular consent manager med loggning av samtyckesversion och tidpunkt.',
                    'Ge användare lika enkel möjlighet att återkalla samtycke som att ge det.',
                ],
                'risk' => 'Sanktioner, förbud mot spårning, civilrättsliga krav och reputationsskada.',
                'level' => 'critical',
            ],
            [
                'name' => 'Schrems II + SCC + EDPB Transfer Impact Assessment',
                'description' => 'Krav vid tredjelandsöverföring av personuppgifter.',
                'why' => 'Många webbtjänster använder amerikanska moln, analytics, e-post eller CDN.',
                'actions' => [
                    'Kartlägg alla dataflöden utanför EES inklusive underbiträden.',
                    'Implementera SCC i avtal och gör TIA per leverantör med tekniska skyddsåtgärder.',
                    'Aktivera kryptering med nyckelkontroll och minimera metadata som lämnar EES.',
                ],
                'risk' => 'Olaga överföring kan leda till behandlingsförbud och höga sanktioner.',
                'level' => 'critical',
            ],
        ],
    ],
    [
        'id' => 'consumer-commerce',
        'title' => 'Konsumenträtt & e‑handel',
        'color' => '#9ef7b3',
        'summary' => 'Informationskrav, avtal, prenumerationer, betalningar och marknadsföring till konsument.',
        'frameworks' => [
            [
                'name' => 'Distansavtalslagen (SFS 2005:59)',
                'description' => 'Krav på förhandsinformation, ångerrätt och avtalsprocesser online.',
                'why' => 'Checkout-flöden och onboarding måste juridiskt vara korrekt utformade.',
                'actions' => [
                    'Visa obligatorisk förhandsinformation innan köp med tydlig köpaknapp.',
                    'Automatisera orderbekräftelse och ångerinformation på varaktigt medium.',
                    'Implementera logik för ångerrätt, undantag och återbetalningsflöden inom tidsfrister.',
                ],
                'risk' => 'Ogiltiga avtal, tillsyn från Konsumentverket och sanktioner.',
                'level' => 'high',
            ],
            [
                'name' => 'E-handelslagen (SFS 2002:562)',
                'description' => 'Informationsskyldighet och regler för informationssamhällets tjänster.',
                'why' => 'Sajten måste visa juridisk identitet och kontaktuppgifter korrekt.',
                'actions' => [
                    'Publicera företagsnamn, org.nr, geografisk adress, e-post och tillsynsinfo.',
                    'Säkerställ att tekniska steg för avtalsslut och språkval är tydligt beskrivna.',
                    'Logga bevis för accepterade villkor/versioner vid avtalstillfället.',
                ],
                'risk' => 'Förelägganden, avtalsrättsliga tvister och reputationsrisk.',
                'level' => 'high',
            ],
            [
                'name' => 'Pris­informationslagen + marknadsföringsregler',
                'description' => 'Pris ska vara korrekt, transparent och inte vilseledande.',
                'why' => 'Fel prislogik i UI/checkout är ett vanligt compliance-fel.',
                'actions' => [
                    'Visa totalpris inklusive avgifter/skatt innan beställning slutförs.',
                    'Implementera historik för prisändringar vid kampanjer och rea-markering.',
                    'Validera rabatter och tillägg i backend för att undvika mismatch mot frontend.',
                ],
                'risk' => 'Marknadsstörningsavgift, förelägganden och kundtvister.',
                'level' => 'high',
            ],
            [
                'name' => 'Prenumerationsregler / “klicka-för-att-avsluta” (EU 2024–2026 trend)',
                'description' => 'Skärpta krav på enkel uppsägning och förnyelseinformation.',
                'why' => 'Dolda uppsägningsvägar och dark patterns i abonnemang är hög risk.',
                'actions' => [
                    'Skapa en uppsägningsväg som är lika enkel som registrering.',
                    'Visa förnyelsedatum, bindningstid och prisförändringar i kontoöversikt.',
                    'Skicka automatiska påminnelser före förlängning där regel kräver det.',
                ],
                'risk' => 'Förbud mot avtalsvillkor, återbetalningskrav och sanktionsavgifter.',
                'level' => 'high',
            ],
        ],
    ],
    [
        'id' => 'digital-regulation',
        'title' => 'EU digital reglering 2024–2026',
        'color' => '#ffd47e',
        'summary' => 'Nya EU-regler för plattformar, AI, data och digital rättvisa.',
        'frameworks' => [
            [
                'name' => 'Digital Services Act (DSA)',
                'description' => 'Krav för förmedlingstjänster/plattformar kring olagligt innehåll, transparens och notices.',
                'why' => 'Om kunden har UGC, annonser eller marknadsplatser krävs särskilda mekanismer.',
                'actions' => [
                    'Bygg notice-and-action-flöde med ärendehantering och spårbara beslut.',
                    'Publicera transparensinformation om moderation, annonser och rekommendationslogik.',
                    'Inför intern process för “trusted flagger” och eskalering av olagligt innehåll.',
                ],
                'risk' => 'Mycket höga EU-sanktioner och tvingande ändringar i plattformens funktion.',
                'level' => 'critical',
            ],
            [
                'name' => 'Digital Markets Act (DMA)',
                'description' => 'Regler för gatekeepers kring interoperabilitet och rättvis konkurrens.',
                'why' => 'Berör integrationer med gatekeeper-ekosystem och appdistribution.',
                'actions' => [
                    'Undvik design som tekniskt låser in användare i strid med konkurrenskrav.',
                    'Säkerställ API-integrering och dataportabilitet där kund agerar i gatekeepermiljö.',
                ],
                'risk' => 'Konkurrensrättsliga sanktioner och teknisk ombyggnad av produkt.',
                'level' => 'medium',
            ],
            [
                'name' => 'EU AI Act (införande 2024–2026)',
                'description' => 'Riskbaserade regler för AI-system, inklusive transparens och förbjudna praktiker.',
                'why' => 'Allt fler webbplatser använder generativ AI, profilering och automatiserat beslutsstöd.',
                'actions' => [
                    'Klassificera AI-funktioner enligt risknivå och dokumentera syfte/dataset.',
                    'Märk AI-genererat innehåll där transparens krävs och logga modellversioner.',
                    'Implementera human oversight, fallback och incidentspårning för AI-output.',
                ],
                'risk' => 'Höga sanktionsnivåer och förbud mot användning av vissa AI-funktioner.',
                'level' => 'critical',
            ],
            [
                'name' => 'Data Act + Data Governance Act',
                'description' => 'Regler för datadelning, åtkomst och rättvisa i dataekonomin.',
                'why' => 'API-strategi, IoT-integrationer och kunders dataåtkomst påverkas direkt.',
                'actions' => [
                    'Bygg exportbara dataformat och dokumenterade API-villkor för dataportabilitet.',
                    'Separera affärskritiska hemligheter från data som måste delas enligt regelverk.',
                    'Inför åtkomstkontroller och audit logs för datautlämning.',
                ],
                'risk' => 'Tvister, tillsyn och krav på ombyggnad av dataarkitektur.',
                'level' => 'high',
            ],
        ],
    ],
    [
        'id' => 'security-resilience',
        'title' => 'Cybersäkerhet, NIS2 & incidenter',
        'color' => '#ff9eb1',
        'summary' => 'Tekniska och organisatoriska säkerhetskrav samt rapportering vid incidenter.',
        'frameworks' => [
            [
                'name' => 'NIS2-direktivet + svensk implementering',
                'description' => 'Skärpta krav på riskhantering, styrning och incidentrapportering.',
                'why' => 'Många kunder i samhällsviktig eller medelstor verksamhet kan omfattas.',
                'actions' => [
                    'Implementera riskbaserad säkerhetsarkitektur med dokumenterade kontroller.',
                    'Säkerställ logghantering, detektion, patchprocess och leverantörssäkerhet.',
                    'Bygg incidentflöden för 24h tidig varning/72h rapportering där tillämpligt.',
                ],
                'risk' => 'Sanktioner mot organisation och ledning, avtalsförluster och driftstopp.',
                'level' => 'critical',
            ],
            [
                'name' => 'GDPR personuppgiftsincidenter (Art. 33–34)',
                'description' => 'Krav på anmälan till IMY och information till registrerade.',
                'why' => 'Säkerhetsincidenter i webbappar inkluderar ofta persondata.',
                'actions' => [
                    'Bygg incidentrunbooks med juridisk triage och notifieringsbeslut.',
                    'Logga forensiska händelser med tidsstämplar och bevarad integritet.',
                    'Automatisera framtagning av incidentunderlag (typ data, antal, konsekvens).',
                ],
                'risk' => 'Försenad rapportering kan öka sanktionsrisk och skadestånd.',
                'level' => 'critical',
            ],
            [
                'name' => 'Säkerhetsskyddslagen (vid säkerhetskänslig verksamhet)',
                'description' => 'Särskilda krav när verksamheten rör Sveriges säkerhet.',
                'why' => 'Påverkar driftmiljö, åtkomst och leverantörsval i vissa projekt.',
                'actions' => [
                    'Genomför säkerhetsskyddsbedömning innan drift i extern molnmiljö.',
                    'Styr behörighet, bakgrundskontroller och segmentering av känsliga system.',
                ],
                'risk' => 'Allvarliga rättsliga konsekvenser och krav att stoppa verksamhet.',
                'level' => 'high',
            ],
        ],
    ],
    [
        'id' => 'ip-contract',
        'title' => 'Avtal, IP, licenser & byråansvar',
        'color' => '#b8b7ff',
        'summary' => 'Ansvarsfördelning mellan byrå, kund och leverantörer samt immaterialrätt.',
        'frameworks' => [
            [
                'name' => 'Avtalslagen + allmän avtalsrätt',
                'description' => 'Regler för giltiga avtal, oskäliga villkor och tolkning.',
                'why' => 'Projektavtal, SLA och ansvarsbegränsningar måste vara tydliga och balanserade.',
                'actions' => [
                    'Definiera ansvarsmatris för personuppgifter, säkerhet och innehållsansvar.',
                    'Reglera change requests, force majeure, supportnivåer och responstider.',
                    'Inför versionsstyrda avtalsbilagor för tekniska och juridiska krav.',
                ],
                'risk' => 'Kostsamma tvister och obegränsat skadeståndsansvar.',
                'level' => 'high',
            ],
            [
                'name' => 'Upphovsrättslagen + DSM-relaterade regler',
                'description' => 'Skydd för kod, design, text, media och databaser.',
                'why' => 'Fel rättighetskedja kan stoppa leverans eller skapa intrångsansvar.',
                'actions' => [
                    'Dokumentera vem som äger kod, designsystem och innehåll efter leverans.',
                    'Verkställ licensinventering för tredjepartsbibliotek, typsnitt och media.',
                    'Implementera DMCA-/notice-process för intrångsanmälningar vid UGC.',
                ],
                'risk' => 'Skadestånd, förbud och krav att ta ned material.',
                'level' => 'high',
            ],
            [
                'name' => 'Open source-licenser (MIT, Apache-2.0, GPL m.fl.)',
                'description' => 'Licensvillkor styr hur beroenden får användas och distribueras.',
                'why' => 'Felaktig OSS-användning kan tvinga offentliggörande av kod eller bryta avtal.',
                'actions' => [
                    'Inför Software Bill of Materials (SBOM) och automatiserad licensscanning.',
                    'Säkra attribution och NOTICE-filer där licens kräver det.',
                    'Undvik copyleft-konflikter genom arkitekturgränser och juridisk granskning.',
                ],
                'risk' => 'Licensbrott, krav på rättelse och kommersiella konflikter.',
                'level' => 'medium',
            ],
            [
                'name' => 'Varumärkesrätt (Sverige/EU)',
                'description' => 'Skyddar kännetecken, namn och domänanvändning.',
                'why' => 'Kampanjsidor och SEO-innehåll kan orsaka varumärkesintrång.',
                'actions' => [
                    'Validera namn/metadata och kampanjcopy mot varumärkesrisk.',
                    'Implementera process för snabb takedown av intrångsgörande innehåll.',
                ],
                'risk' => 'Föreläggande, skadestånd och omprofilering.',
                'level' => 'medium',
            ],
        ],
    ],
    [
        'id' => 'accessibility-sector',
        'title' => 'Tillgänglighet, sektorregler & hållbarhet',
        'color' => '#ffef9a',
        'summary' => 'Tillgänglighetskrav, branschspecifika krav, betalning och hållbar digitalisering.',
        'frameworks' => [
            [
                'name' => 'WCAG 2.2 + DOS-lagen (offentlig sektor) + EAA 2025+',
                'description' => 'Krav på tillgängliga digitala tjänster för offentlig sektor och utpekade privata tjänster.',
                'why' => 'Tillgänglighet är både lagkrav och avgörande UX-kvalitet.',
                'actions' => [
                    'Bygg semantisk HTML, korrekt fokusordning, tangentbordsnavigering och ARIA där nödvändigt.',
                    'Säkerställ kontrast, textskalning, formulärfelmeddelanden och alternativ till media.',
                    'Inför kontinuerlig tillgänglighetstestning i CI med manuella verifieringar.',
                ],
                'risk' => 'Tillsyn, rättelsekrav, upphandlingshinder och exkluderande användarupplevelse.',
                'level' => 'critical',
            ],
            [
                'name' => 'PSD2/Betaltjänstregler + PCI DSS',
                'description' => 'Regler för betalflöden, stark kundautentisering och kortdataskydd.',
                'why' => 'Checkout och betalmoduler är hög-risk för både säkerhet och compliance.',
                'actions' => [
                    'Tokenisera kortdata och undvik lagring av PAN/CVV i egna system.',
                    'Säkerställ SCA-flöden och robust felhantering vid 3DS/omdirigering.',
                    'Segmentera betalningsmiljö och implementera kontinuerlig sårbarhetsskanning.',
                ],
                'risk' => 'Kortbedrägerier, avtalsbrott mot inlösare och stora böter.',
                'level' => 'critical',
            ],
            [
                'name' => 'Barn och minderåriga (GDPR + konsumenträtt + marknadsföringsetik)',
                'description' => 'Skärpt skydd vid profilering, köpflöden och design riktad mot barn.',
                'why' => 'Designval kan anses otillbörliga även om funktionellt korrekta.',
                'actions' => [
                    'Inför åldersanpassad design och minimera profilering för minderåriga.',
                    'Undvik manipulerande dark patterns i spelifiering, köp och samtyckesflöden.',
                    'Implementera föräldrainformation där relevant och tydlig språkdräkt.',
                ],
                'risk' => 'Skärpt tillsyn, förbud och stor varumärkesskada.',
                'level' => 'high',
            ],
            [
                'name' => 'ESG/CSRD-relaterad digital rapportering (indirekt påverkan)',
                'description' => 'Krav på tillförlitlig hållbarhetsdata och spårbar digital rapportering.',
                'why' => 'Webbplattformar används ofta för offentlig hållbarhetskommunikation.',
                'actions' => [
                    'Säkerställ revisionsspår i publiceringssystem och versionshistorik.',
                    'Skilj verifierad rapportdata från marknadsföringscopy i informationsarkitektur.',
                ],
                'risk' => 'Greenwashing-risk, förtroendeskada och regulatorisk granskning.',
                'level' => 'medium',
            ],
        ],
    ],
];

$riskZones = [
    ['title' => 'Mörka mönster (dark patterns)', 'impact' => 'Hög', 'detail' => 'Manipulativa UI-flöden i samtycke, uppsägning eller checkout kan bryta mot flera regelverk samtidigt.'],
    ['title' => 'Skugg-IT och okontrollerade tredjepartsskript', 'impact' => 'Kritisk', 'detail' => 'Oinventerade scripts skapar dataöverföringar utan rättslig grund och säkerhetskontroll.'],
    ['title' => 'Bristande loggning och bevisbörda', 'impact' => 'Hög', 'detail' => 'Utan revisionsspår går det inte att bevisa samtycke, incidenthantering eller avtalsaccept.'],
    ['title' => 'Fel rollfördelning personuppgiftsansvarig/biträde', 'impact' => 'Hög', 'detail' => 'Otydlig ansvarskedja orsakar avtalsluckor och tillsynsrisk.'],
    ['title' => 'Otillräcklig Secure SDLC', 'impact' => 'Kritisk', 'detail' => 'Avsaknad av hotmodellering, kodgranskning och patchfönster ökar incidentfrekvens kraftigt.'],
];

$agencyResponsibilities = [
    'Definiera i avtal vem som är personuppgiftsansvarig, personuppgiftsbiträde och underbiträde per delsystem.',
    'Inför obligatorisk compliance-gate i projektmodellen: discovery -> design -> utveckling -> lansering -> drift.',
    'Etablera säkerhetsbilaga med minimikrav: MFA, loggning, backup, återställningstest, patch SLA.',
    'Kräv leverantörsregister med jurisdiktion, dataplacering, sub-processors och incidentkontakt.',
    'Bygg kundvänlig men juridiskt robust dokumentation: ROPA, DPIA, TIA, cookie-matris, riskregister.',
    'Använd ansvarstak med undantag för grov vårdslöshet, sekretessbrott och immaterialrättsintrång.',
];

$complianceMatrix = [
    ['area' => 'Cookies & Tracking', 'legal' => 'LEK/ePrivacy + GDPR', 'owner' => 'Frontend + juridik', 'evidence' => 'Consent logs, script inventory, CMP versioner'],
    ['area' => 'Datamodell & retention', 'legal' => 'GDPR Art. 5/25/30', 'owner' => 'Backend + DPO', 'evidence' => 'Datakatalog, gallringsjobb, ROPA'],
    ['area' => 'Plattformsinnehåll/UGC', 'legal' => 'DSA', 'owner' => 'Produkt + trust & safety', 'evidence' => 'Notice-action journal, transparensrapport'],
    ['area' => 'AI-funktioner', 'legal' => 'AI Act + GDPR', 'owner' => 'ML/Produkt + juridik', 'evidence' => 'Riskklassning, modellloggar, policyer'],
    ['area' => 'Tillgänglighet', 'legal' => 'WCAG/EAA/DOS', 'owner' => 'UX + frontend + QA', 'evidence' => 'Auditprotokoll, testresultat, åtgärdsplan'],
    ['area' => 'Informationssäkerhet', 'legal' => 'NIS2/GDPR', 'owner' => 'Security + drift', 'evidence' => 'Riskanalyser, SIEM-loggar, incidentrapporter'],
    ['area' => 'Betalning', 'legal' => 'PSD2/PCI DSS', 'owner' => 'Backend + payment lead', 'evidence' => 'SAQ/AoC, SCA-logik, leverantörsavtal'],
    ['area' => 'Open source & IP', 'legal' => 'Licenser + upphovsrätt', 'owner' => 'Tech lead + legal', 'evidence' => 'SBOM, NOTICE, licensgodkännanden'],
];

$checklist = [
    'Kartlägg alla dataflöden (insamling, lagring, export, deletion, tredjeland).',
    'Färdigställ cookie- och spårningsinventering innan go-live.',
    'Validera rättslig grund per formulär, event och API-endpoint.',
    'Aktivera CSP, HSTS, SRI, secure headers och strikt sessionshantering.',
    'Sätt upp central loggning med immutable audit trails och retention policy.',
    'Implementera rollbaserad åtkomst och MFA för administrationsgränssnitt.',
    'Genomför hotmodellering (STRIDE/liknande) före utveckling av kritiska flöden.',
    'Skapa incidentrunbook med juridisk tidslinje (24h/72h/kommunikation).',
    'Kör kontinuerlig dependency scanning + SBOM-generering i CI.',
    'Verifiera WCAG 2.2 AA med både automatiska och manuella tester.',
    'Säkerställ uppsägning av prenumeration på samma komplexitetsnivå som köp.',
    'Dokumentera AI-funktioners riskklassning, transparens och human oversight.',
    'Kontraktera personuppgiftsbiträdesavtal med samtliga relevanta leverantörer.',
    'Definiera backup- och restore-mål (RPO/RTO) och testa återställning kvartalsvis.',
    'Lås release först när juridisk, säkerhetsmässig och UX-accessibility signoff finns.',
];

function esc(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sveriges kompletta web compliance-karta 2026</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;0,9..144,700;1,9..144,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f6f5f1;
            --surface: #ffffff;
            --ink: #1a1a1a;
            --muted: #5c5c5c;
            --border: #e2e0da;
            --accent: #0d5c4a;
            --accent-soft: #e8f2ef;
            --critical: #b91c1c;
            --critical-soft: #fef2f2;
            --high: #b45309;
            --high-soft: #fffbeb;
            --medium: #1d4ed8;
            --medium-soft: #eff6ff;
            --shadow-sm: 0 1px 3px rgba(0,0,0,.06);
            --shadow-md: 0 4px 12px rgba(0,0,0,.08);
            --radius: 12px;
            --radius-sm: 8px;
            --easing: cubic-bezier(.25, .46, .45, .94);
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            color: var(--ink);
            font-family: "DM Sans", system-ui, sans-serif;
            font-size: 1rem;
            line-height: 1.65;
            background: var(--bg);
            overflow-x: hidden;
        }

        .preloader {
            position: fixed;
            inset: 0;
            display: grid;
            place-items: center;
            background: var(--bg);
            z-index: 9999;
            transition: opacity .4s var(--easing), visibility .4s var(--easing);
        }
        .preloader.hidden { opacity: 0; visibility: hidden; pointer-events: none; }
        .loader-ring {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 3px solid var(--border);
            border-top-color: var(--accent);
            animation: spin .8s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        .progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0;
            height: 3px;
            z-index: 1200;
            background: var(--accent);
            transition: width .1s linear;
        }

        .nav {
            position: sticky;
            top: 0;
            z-index: 1100;
            background: rgba(255,255,255,.92);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(10px);
        }
        .nav-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: .75rem 1.5rem;
        }
        .nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: .35rem;
        }
        .nav a {
            display: inline-block;
            padding: .5rem .85rem;
            border-radius: var(--radius-sm);
            color: var(--muted);
            text-decoration: none;
            font-size: .9rem;
            font-weight: 500;
            white-space: nowrap;
            transition: color .2s, background .2s;
        }
        .nav a:hover {
            color: var(--accent);
            background: var(--accent-soft);
        }
        .nav a.active {
            color: var(--accent);
            background: var(--accent-soft);
        }

        .wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .section {
            padding: clamp(3rem, 8vw, 5rem) 0;
        }
        .section:nth-of-type(even) {
            background: rgba(0,0,0,.02);
        }
        .section-head {
            margin-bottom: 1.75rem;
        }
        .section-label {
            font-size: .75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .12em;
            color: var(--accent);
            margin-bottom: .5rem;
        }
        h1, h2, h3, h4 {
            font-family: "Fraunces", Georgia, serif;
            line-height: 1.25;
            margin-top: 0;
            color: var(--ink);
        }
        h1 {
            font-size: clamp(1.85rem, 4.5vw, 3.25rem);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        h2 {
            font-size: clamp(1.5rem, 2.8vw, 2.25rem);
            font-weight: 600;
            margin-bottom: .5rem;
        }
        h3 { font-size: 1.25rem; font-weight: 600; }
        h4 { font-size: 1.05rem; font-weight: 600; }
        p { margin: 0 0 1rem; }
        .lead {
            max-width: 70ch;
            color: var(--muted);
            font-size: 1.1rem;
        }

        .hero {
            padding-top: clamp(3rem, 10vw, 5rem);
            padding-bottom: clamp(3rem, 8vw, 5rem);
        }
        .hero-card { max-width: 42rem; }
        .chip-row {
            display: flex;
            flex-wrap: wrap;
            gap: .5rem;
            margin: 1.5rem 0 1rem;
        }
        .chip {
            display: inline-flex;
            align-items: center;
            padding: .35rem .75rem;
            border-radius: 999px;
            background: var(--surface);
            border: 1px solid var(--border);
            color: var(--ink);
            font-size: .85rem;
            font-weight: 500;
            box-shadow: var(--shadow-sm);
        }

        .map-grid,
        .risk-zones {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            margin-top: 1.5rem;
        }
        .map-node {
            display: block;
            padding: 1.25rem;
            background: var(--surface);
            border-radius: var(--radius);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
            text-decoration: none;
            color: inherit;
            transition: box-shadow .2s, border-color .2s, transform .2s;
            border-left: 4px solid var(--node-color, var(--accent));
        }
        .map-node:hover {
            box-shadow: var(--shadow-md);
            border-color: var(--node-color, var(--accent));
            transform: translateY(-2px);
        }
        .map-node h3 { margin-bottom: .4rem; }
        .map-node p {
            margin: 0;
            font-size: .9rem;
            color: var(--muted);
            line-height: 1.5;
        }

        .risk-card {
            padding: 1.25rem;
            background: var(--surface);
            border-radius: var(--radius);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
            transition: box-shadow .2s;
        }
        .risk-card:hover { box-shadow: var(--shadow-md); }
        .risk-card h3 { margin-bottom: .5rem; }

        .domain {
            margin-top: 1.5rem;
            background: var(--surface);
            border-radius: var(--radius);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
            overflow: hidden;
            border-left: 4px solid var(--domain-color, var(--accent));
        }
        .domain > header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            padding: 1.1rem 1.25rem;
            cursor: pointer;
            transition: background .2s;
        }
        .domain > header:hover { background: rgba(0,0,0,.02); }
        .domain .content {
            padding: 0 1.25rem 1.25rem;
            border-top: 1px solid var(--border);
        }
        .domain.open .content { display: block; }
        .domain:not(.open) .content { display: none; }
        .domain-toggle {
            padding: .4rem .75rem;
            border-radius: var(--radius-sm);
            border: 1px solid var(--border);
            background: var(--surface);
            color: var(--muted);
            font-size: .85rem;
            font-weight: 500;
            cursor: pointer;
            transition: border-color .2s, color .2s;
        }
        .domain-toggle:hover {
            border-color: var(--domain-color, var(--accent));
            color: var(--domain-color, var(--accent));
        }

        .framework {
            padding: 1.1rem 0;
            margin-bottom: 0;
            border-bottom: 1px solid var(--border);
        }
        .framework:last-child { border-bottom: none; padding-bottom: 0; }
        .framework h4 { margin-bottom: .6rem; }
        .meta {
            display: grid;
            gap: .35rem;
            color: var(--muted);
            font-size: .9rem;
            margin-bottom: .75rem;
        }
        .tight {
            margin: .5rem 0 0;
            padding-left: 1.25rem;
            font-size: .95rem;
        }
        .tight li { margin-bottom: .35rem; }
        .risk {
            margin: .75rem 0 0;
            padding: .65rem .85rem;
            background: var(--critical-soft);
            border-radius: var(--radius-sm);
            color: #991b1b;
            font-size: .9rem;
        }
        .level-badge {
            display: inline-block;
            padding: .2rem .5rem;
            border-radius: 4px;
            font-size: .7rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        .level-critical { background: var(--critical-soft); color: var(--critical); }
        .level-high { background: var(--high-soft); color: var(--high); }
        .level-medium { background: var(--medium-soft); color: var(--medium); }

        .section-divider { display: none; }

        .card {
            padding: 1.25rem 1.5rem;
            background: var(--surface);
            border-radius: var(--radius);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
        }
        .card .tight { margin-top: .5rem; }

        .matrix-wrap {
            overflow-x: auto;
            border-radius: var(--radius);
            border: 1px solid var(--border);
            background: var(--surface);
            box-shadow: var(--shadow-sm);
        }
        .matrix-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 640px;
        }
        .matrix-table th,
        .matrix-table td {
            padding: .85rem 1rem;
            text-align: left;
            border-bottom: 1px solid var(--border);
        }
        .matrix-table th {
            background: var(--accent-soft);
            color: var(--accent);
            font-weight: 600;
            font-size: .9rem;
        }
        .matrix-table tbody tr:hover { background: rgba(0,0,0,.02); }
        .matrix-table tbody tr:last-child td { border-bottom: none; }

        .checklist {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: .85rem;
            list-style: none;
            margin: 1.25rem 0 0;
            padding: 0;
        }
        .checklist li {
            padding: 1rem 1rem 1rem 2.5rem;
            background: var(--surface);
            border-radius: var(--radius);
            border: 1px solid var(--border);
            position: relative;
            font-size: .95rem;
        }
        .checklist li::before {
            content: "✓";
            position: absolute;
            left: 1rem;
            top: 1rem;
            width: 1.25rem;
            height: 1.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--accent-soft);
            color: var(--accent);
            font-weight: 700;
            font-size: .75rem;
            border-radius: 50%;
        }

        footer {
            margin-top: 3rem;
            padding: 2.5rem 0;
            background: var(--ink);
            color: #a3a3a3;
        }
        footer .wrap { padding: 0 1.5rem; }
        footer p { margin: 0; font-size: .95rem; }

        .reveal {
            opacity: 0;
            transform: translateY(14px);
            transition: opacity .5s var(--easing), transform .5s var(--easing);
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .word {
            opacity: 0;
            display: inline-block;
            margin-right: .25em;
            animation: rise .4s ease forwards;
            animation-delay: calc(var(--word-index) * 50ms);
        }
        @keyframes rise {
            from { transform: translateY(8px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .word.cursor::after {
            content: "";
            display: inline-block;
            width: 2px;
            height: 1em;
            background: var(--accent);
            margin-left: .15em;
            animation: blink 1s steps(1,end) infinite;
            vertical-align: -0.15em;
        }
        @keyframes blink { 50% { opacity: 0; } }

        @media (max-width: 780px) {
            .section { padding: 2rem 0; }
            .wrap { padding: 0 1rem; }
            .nav-inner { padding: .6rem 1rem; }
            .map-grid, .risk-zones, .checklist { grid-template-columns: 1fr; }
            .matrix-table { min-width: 560px; }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation: none !important; transition-duration: .01ms !important; }
            .reveal { opacity: 1; transform: none; }
            html { scroll-behavior: auto; }
        }
    </style>
</head>
<body>
<div class="preloader" id="preloader" aria-hidden="true"><div class="loader-ring"></div></div>
<div class="progress" id="scroll-progress" aria-hidden="true"></div>

<nav class="nav" aria-label="Primär navigering">
    <div class="nav-inner wrap">
        <ul>
            <li><a href="#hero">Start</a></li>
            <li><a href="#map">Juridisk karta</a></li>
            <li><a href="#domains">Huvudkategorier</a></li>
            <li><a href="#riskzones">Riskzoner</a></li>
            <li><a href="#actions">Åtgärder</a></li>
            <li><a href="#agency">Byråansvar</a></li>
            <li><a href="#matrix">Matris</a></li>
            <li><a href="#checklist">Checklista</a></li>
            <li><a href="#summary">Sammanfattning</a></li>
        </ul>
    </div>
</nav>

<main>
    <section id="hero" class="section hero reveal" aria-labelledby="hero-title">
        <div class="wrap">
            <div class="hero-card" data-parallax="0.08">
                <p class="section-label">Web compliance 2026</p>
                <h1 id="hero-title" data-animated-headline="Komplett juridisk och teknisk web compliance för Sverige 2026">Komplett juridisk och teknisk web compliance för Sverige 2026</h1>
            <p>
                Denna single-page-resurs samlar nationell svensk rätt, direktverkande EU-regler och de viktigaste digitala
                regelverken 2024–2026 i ett praktiskt byggperspektiv för webbutvecklare. Fokus ligger på konkreta implementationer,
                bevisbar efterlevnad och riskreducering i verkliga projekt.
            </p>
            <div class="chip-row" aria-label="Täckningsområden">
                <span class="chip">GDPR & ePrivacy/LEK</span>
                <span class="chip">DSA, DMA, AI Act, Data Act</span>
                <span class="chip">NIS2 & incidentrapportering</span>
                <span class="chip">Konsumenträtt & e‑handel</span>
                <span class="chip">WCAG, DOS, EAA</span>
                <span class="chip">PSD2, PCI DSS, avtal/IP/OSS</span>
            </div>
                <p><strong>Senast uppdaterad:</strong> <?= esc($updatedAt) ?>.</p>
            </div>
        </div>
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <section id="map" class="section reveal" aria-labelledby="map-title">
        <div class="wrap">
            <div class="section-head">
                <h2 id="map-title">Interaktiv juridisk översiktskarta</h2>
                <p class="lead">Klicka på en domän för att hoppa till detaljerad genomgång med åtgärder, risknivå och ansvar.</p>
            </div>
            <div class="map-grid">
            <?php foreach ($domains as $domain): ?>
                <a class="map-node" href="#<?= esc($domain['id']) ?>" style="--node-color: <?= esc($domain['color']) ?>; text-decoration:none; color: inherit;">
                    <h3><?= esc($domain['title']) ?></h3>
                    <p><?= esc($domain['summary']) ?></p>
                </a>
            <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="domains" class="section reveal" aria-labelledby="domain-title">
        <div class="wrap">
            <div class="section-head">
                <h2 id="domain-title">Huvudkategorier och underkategorier</h2>
                <p class="lead">Varje regelverk visar <em>vad det är</em>, <em>varför det påverkar utvecklaren</em>, <em>tekniska åtgärder</em> och <em>juridisk risk</em>.</p>
            </div>
        <?php foreach ($domains as $i => $domain): ?>
            <article id="<?= esc($domain['id']) ?>" class="domain reveal <?= $i === 0 ? 'open' : '' ?>" style="--domain-color: <?= esc($domain['color']) ?>;">
                <header>
                    <h3><?= esc($domain['title']) ?></h3>
                    <button type="button" class="domain-toggle" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>"><?= $i === 0 ? 'Kollapsa' : 'Expandera' ?></button>
                </header>
                <div class="content">
                    <?php foreach ($domain['frameworks'] as $framework): ?>
                        <section class="framework">
                            <h4><?= esc($framework['name']) ?> <span class="level-badge level-<?= esc($framework['level']) ?>"><?= esc($framework['level']) ?></span></h4>
                            <div class="meta">
                                <span><strong>Beskrivning:</strong> <?= esc($framework['description']) ?></span>
                                <span><strong>Påverkan:</strong> <?= esc($framework['why']) ?></span>
                            </div>
                            <strong>Tekniska åtgärder utvecklaren måste göra:</strong>
                            <ul class="tight">
                                <?php foreach ($framework['actions'] as $action): ?>
                                    <li><?= esc($action) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <p class="risk"><strong>Juridisk risk vid bristande efterlevnad:</strong> <?= esc($framework['risk']) ?></p>
                        </section>
                    <?php endforeach; ?>
                </div>
            </article>
        <?php endforeach; ?>
        </div>
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <section id="riskzones" class="section reveal" aria-labelledby="risk-title">
        <div class="wrap">
            <div class="section-head">
                <h2 id="risk-title">Riskzoner</h2>
            </div>
            <div class="risk-zones">
            <?php foreach ($riskZones as $zone): ?>
                <article class="risk-card">
                    <h3><?= esc($zone['title']) ?></h3>
                    <p><strong>Påverkan:</strong> <?= esc($zone['impact']) ?></p>
                    <p><?= esc($zone['detail']) ?></p>
                </article>
            <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="actions" class="section reveal" aria-labelledby="action-title">
        <div class="wrap">
            <div class="section-head">
                <h2 id="action-title">Tekniska åtgärdsmönster</h2>
            </div>
            <div class="card">
            <ul class="tight">
                <li><strong>Privacy by Design:</strong> default-off tracking, dataminimerade formulär, pseudonymisering och per-feature DPIA-trigger.</li>
                <li><strong>Secure SDLC:</strong> hotmodellering, SAST/DAST, code review-policy, signerade releaser och sårbarhets-SLA.</li>
                <li><strong>API-ansvar:</strong> scopes med minst privilegium, schema-validering, rate limiting, mTLS där relevant och revisionslogg per klient.</li>
                <li><strong>Loggning & bevisbörda:</strong> oföränderlig loggkedja, tidsstämplar synkade via NTP, exportbar audit trail för tillsyn.</li>
                <li><strong>Moln & tredjeland:</strong> datalokaliseringskontroller, underbiträdesövervakning, krypteringsnycklar under kundkontroll.</li>
                <li><strong>Driftansvar:</strong> backup/restore-test, failover-övningar, least privilege i drift och incidentövningar med juridikteam.</li>
            </ul>
            </div>
        </div>
    </section>

    <section id="agency" class="section reveal" aria-labelledby="agency-title">
        <div class="wrap">
            <div class="section-head">
                <h2 id="agency-title">Byrå- och avtalsansvar</h2>
            </div>
            <div class="card">
            <ul class="tight">
                <?php foreach ($agencyResponsibilities as $item): ?>
                    <li><?= esc($item) ?></li>
                <?php endforeach; ?>
            </ul>
            </div>
        </div>
    </section>

    <section id="matrix" class="section reveal" aria-labelledby="matrix-title">
        <div class="wrap">
            <div class="section-head">
                <h2 id="matrix-title">Compliance-matris</h2>
            </div>
            <div class="matrix-wrap">
            <table class="matrix-table">
                <thead>
                    <tr>
                        <th>Område</th>
                        <th>Regelverk</th>
                        <th>Primärt ansvar</th>
                        <th>Bevis på efterlevnad</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($complianceMatrix as $row): ?>
                    <tr>
                        <td><?= esc($row['area']) ?></td>
                        <td><?= esc($row['legal']) ?></td>
                        <td><?= esc($row['owner']) ?></td>
                        <td><?= esc($row['evidence']) ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
    </section>

    <section id="checklist" class="section reveal" aria-labelledby="checklist-title">
        <div class="wrap">
            <div class="section-head">
                <h2 id="checklist-title">Fullständig utvecklar-checklista</h2>
            </div>
            <ul class="checklist" aria-label="Utvecklarchecklista">
            <?php foreach ($checklist as $point): ?>
                <li><?= esc($point) ?></li>
            <?php endforeach; ?>
        </ul>
        </div>
    </section>

    <section id="summary" class="section reveal" aria-labelledby="summary-title">
        <div class="wrap">
            <div class="section-head">
                <h2 id="summary-title">Sammanfattning av regelstrukturen</h2>
            </div>
            <div class="card">
            <p class="lead">Den praktiska prioriteringsordningen för 2026: <strong>(1) dataskydd + cookies</strong> → <strong>(2) säkerhet/NIS2 + incidentberedskap</strong> → <strong>(3) konsument/e-handel</strong> → <strong>(4) AI/DSA/dataregler</strong> → <strong>(5) tillgänglighet och sektorskrav</strong> → <strong>(6) avtal/IP/licenser</strong>. Alla områden måste dokumenteras med tekniskt bevismaterial.</p>
            <div class="chip-row">
                <span class="chip">Juridik + teknik + UX måste designas tillsammans.</span>
                <span class="chip">Ingen compliance utan loggbar beviskedja.</span>
                <span class="chip">Policytext utan implementation är inte efterlevnad.</span>
            </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="wrap">
        <p>Detta är ett arbetsverktyg för utvecklingsteam, jurister och byråer i svenska kundprojekt 2026. Bedöm alltid kundens branschspecifika krav (t.ex. vård, finans, offentlig sektor, edtech, medtech, kritisk infrastruktur) innan go-live.</p>
        </div>
    </footer>
</main>

<script>
(() => {
    const preloader = document.getElementById('preloader');
    window.addEventListener('load', () => setTimeout(() => preloader.classList.add('hidden'), 300));

    const progress = document.getElementById('scroll-progress');
    const links = [...document.querySelectorAll('.nav a')];
    const sections = links
        .map((link) => document.querySelector(link.getAttribute('href')))
        .filter(Boolean);

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.reveal').forEach((el) => revealObserver.observe(el));

    const animatedHeadline = document.querySelector('[data-animated-headline]');
    if (animatedHeadline) {
        const text = animatedHeadline.dataset.animatedHeadline.trim();
        animatedHeadline.textContent = '';
        text.split(/\s+/).forEach((word, index, words) => {
            const span = document.createElement('span');
            span.className = 'word';
            if (index === words.length - 1) span.classList.add('cursor');
            span.style.setProperty('--word-index', String(index));
            span.textContent = word;
            animatedHeadline.appendChild(span);
        });
    }

    // Scroll progress + active nav.
    function onScroll() {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        progress.style.width = `${pct}%`;

        let active = null;
        sections.forEach((section) => {
            const top = section.offsetTop - 120;
            if (scrollTop >= top) active = section.id;
        });

        links.forEach((link) => {
            const isActive = link.getAttribute('href') === `#${active}`;
            link.classList.toggle('active', isActive);
        });

        document.querySelectorAll('[data-parallax]').forEach((el) => {
            const speed = parseFloat(el.dataset.parallax || '0.05');
            el.style.transform = `translateY(${scrollTop * speed * 0.08}px)`;
        });
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // Expand/collapse for domain sections.
    document.querySelectorAll('.domain').forEach((domain) => {
        const header = domain.querySelector('header');
        const btn = domain.querySelector('.domain-toggle');
        if (!header || !btn) return;
        header.addEventListener('click', () => {
            const isOpen = domain.classList.toggle('open');
            btn.textContent = isOpen ? 'Kollapsa' : 'Expandera';
            btn.setAttribute('aria-expanded', isOpen);
        });
    });
})();
</script>
</body>
</html>
