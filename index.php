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
    <style>
        :root {
            --bg-deep: #090d1f;
            --bg-dark: #111938;
            --ink: #f6f7ff;
            --muted: #c6cceb;
            --accent-a: #7f7bff;
            --accent-b: #57d6ff;
            --accent-c: #ffcb5b;
            --panel: rgba(9, 15, 33, 0.55);
            --line: rgba(255, 255, 255, 0.14);
            --shadow: 0 26px 60px rgba(6, 11, 27, 0.4);
            --easing: cubic-bezier(.22, .8, .26, 1);
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            color: var(--ink);
            font-family: "Inter", "Segoe UI", Roboto, sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #070b17 0%, #0f1936 52%, #0c1128 100%);
            overflow-x: hidden;
        }

        #bg-canvas {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            opacity: .5;
        }

        .preloader {
            position: fixed;
            inset: 0;
            display: grid;
            place-items: center;
            background: #050914;
            z-index: 9999;
            transition: opacity .5s var(--easing), visibility .5s var(--easing);
        }
        .preloader.hidden { opacity: 0; visibility: hidden; }
        .loader-ring {
            width: 76px;
            height: 76px;
            border-radius: 999px;
            border: 4px solid rgba(255,255,255,.16);
            border-top-color: var(--accent-b);
            animation: spin 1s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        .progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0;
            height: 4px;
            z-index: 1200;
            background: linear-gradient(90deg, var(--accent-a), var(--accent-b), var(--accent-c));
            box-shadow: 0 0 20px rgba(87, 214, 255, .5);
        }

        .nav {
            position: sticky;
            top: 0;
            z-index: 1100;
            backdrop-filter: blur(12px);
            background: linear-gradient(90deg, rgba(13, 19, 41, .94), rgba(17, 32, 68, .85));
            border-bottom: 1px solid rgba(255,255,255,.14);
        }
        .nav ul {
            list-style: none;
            margin: 0;
            padding: .9rem max(1.1rem, 3vw);
            display: flex;
            gap: .5rem;
            overflow-x: auto;
        }
        .nav a {
            display: inline-flex;
            padding: .45rem .9rem;
            border-radius: 999px;
            border: 1px solid transparent;
            color: var(--muted);
            text-decoration: none;
            white-space: nowrap;
            transition: .28s var(--easing);
        }
        .nav a:hover,
        .nav a.active {
            color: #fff;
            border-color: rgba(255,255,255,.35);
            background: rgba(127, 123, 255, .25);
        }

        .wrap {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .section {
            position: relative;
            width: 100%;
            padding: clamp(2.8rem, 6vw, 5rem) clamp(1.2rem, 5vw, 6rem);
            border-top: 1px solid rgba(255,255,255,.08);
        }
        .section::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
        }
        .section:nth-of-type(odd)::before {
            background:
                radial-gradient(circle at 10% 0%, rgba(127, 123, 255, .28), transparent 35%),
                radial-gradient(circle at 95% 80%, rgba(87, 214, 255, .2), transparent 28%),
                linear-gradient(135deg, rgba(10, 16, 36, .95), rgba(12, 21, 45, .88));
        }
        .section:nth-of-type(even)::before {
            background:
                radial-gradient(circle at 85% 0%, rgba(255, 203, 91, .2), transparent 36%),
                radial-gradient(circle at 5% 75%, rgba(87, 214, 255, .2), transparent 32%),
                linear-gradient(135deg, rgba(16, 27, 55, .9), rgba(8, 14, 32, .93));
        }

        .hero {
            min-height: min(92vh, 960px);
            display: flex;
            align-items: center;
        }
        .hero-card {
            max-width: 1100px;
        }
        h1, h2, h3, h4 { line-height: 1.2; margin-top: 0; }
        h1 {
            font-size: clamp(2rem, 5.6vw, 4.9rem);
            margin-bottom: .8rem;
            letter-spacing: -.02em;
        }
        h2 {
            font-size: clamp(1.65rem, 3.3vw, 3rem);
            margin-bottom: .65rem;
        }

        p { margin-top: 0; }
        .lead {
            max-width: 92ch;
            color: #e4ebff;
            font-size: clamp(1.02rem, 1.5vw, 1.2rem);
        }

        .chip-row {
            display: flex;
            flex-wrap: wrap;
            gap: .55rem;
            margin: 1rem 0 1.2rem;
        }
        .chip {
            display: inline-flex;
            align-items: center;
            padding: .4rem .85rem;
            border-radius: 999px;
            background: rgba(255,255,255,.12);
            border: 1px solid rgba(255,255,255,.2);
            color: #f8f9ff;
            font-size: .9rem;
        }

        .map-grid,
        .risk-zones {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            margin-top: 1.4rem;
        }
        .map-node,
        .risk-card,
        .domain,
        .framework,
        .glass {
            border: 1px solid var(--line);
            background: var(--panel);
            border-radius: 14px;
            box-shadow: var(--shadow);
            backdrop-filter: blur(7px);
        }
        .map-node,
        .risk-card {
            padding: 1rem;
            transition: transform .2s ease;
        }
        .map-node:hover,
        .risk-card:hover { transform: translateY(-4px); }

        .domain {
            margin-top: 1rem;
            overflow: hidden;
            border-left: 3px solid var(--domain-color, var(--accent-a));
        }
        .domain > header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: .8rem;
            padding: .95rem 1rem;
            cursor: pointer;
        }
        .domain .content {
            padding: 0 1rem 1rem;
        }
        .framework {
            padding: .9rem;
            margin-bottom: .85rem;
        }
        .meta {
            display: grid;
            gap: .4rem;
            color: #d5dcf7;
            margin-bottom: .7rem;
        }
        .tight { margin: .4rem 0 0; padding-left: 1.2rem; }
        .risk { color: #ffd8df; }

        .section-divider { display: none; }

        .matrix-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }
        .matrix-table th,
        .matrix-table td {
            padding: .72rem;
            text-align: left;
            border-bottom: 1px solid rgba(255,255,255,.12);
        }
        .matrix-table th {
            background: rgba(127,123,255,.2);
            color: #f9faff;
            position: sticky;
            top: 0;
        }

        .checklist {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
            gap: .75rem;
            list-style: none;
            margin: 1rem 0 0;
            padding: 0;
        }
        .checklist li {
            padding: .8rem .9rem .8rem 2.2rem;
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,.16);
            background: rgba(9,15,33,.45);
            position: relative;
        }
        .checklist li::before {
            content: "✓";
            position: absolute;
            left: .85rem;
            top: .72rem;
            color: #82f0aa;
            font-weight: 700;
        }

        footer {
            padding: 2rem clamp(1.2rem, 5vw, 6rem) 2.8rem;
            color: #c8cfef;
            background: rgba(8, 13, 29, .92);
            border-top: 1px solid rgba(255,255,255,.1);
        }

        .reveal {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity .55s ease, transform .55s ease;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .word {
            opacity: 0;
            display: inline-block;
            margin-right: .2em;
            animation: rise .48s ease forwards;
            animation-delay: calc(var(--word-index) * 60ms);
        }
        @keyframes rise {
            from { transform: translateY(12px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .word.cursor::after {
            content: "";
            display: inline-block;
            width: 2px;
            height: 1em;
            background: var(--accent-b);
            margin-left: .12em;
            animation: blink 1s steps(1,end) infinite;
            vertical-align: -0.12em;
        }
        @keyframes blink { 50% { opacity: 0; } }

        @media (max-width: 780px) {
            .hero { min-height: auto; }
            .section { padding: 2.3rem 1rem; }
            .map-grid,
            .risk-zones,
            .checklist { grid-template-columns: 1fr; }
            .matrix-table { min-width: 640px; }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation: none !important; transition: none !important; }
            .reveal { opacity: 1; transform: none; }
            html { scroll-behavior: auto; }
        }
    </style>
</head>
<body>
<div class="preloader" id="preloader" aria-hidden="true"><div class="loader-ring"></div></div>
<canvas id="bg-canvas" aria-hidden="true"></canvas>
<div class="progress" id="scroll-progress" aria-hidden="true"></div>

<nav class="nav" aria-label="Primär navigering">
    <ul>
        <li><a href="#hero">Start</a></li>
        <li><a href="#map">Juridisk karta</a></li>
        <li><a href="#domains">Huvudkategorier</a></li>
        <li><a href="#riskzones">Riskzoner</a></li>
        <li><a href="#actions">Tekniska åtgärder</a></li>
        <li><a href="#agency">Byråansvar</a></li>
        <li><a href="#matrix">Compliance-matris</a></li>
        <li><a href="#checklist">Checklista</a></li>
        <li><a href="#summary">Visuell sammanfattning</a></li>
    </ul>
</nav>

<main class="wrap">
    <section id="hero" class="hero reveal section-shell" aria-labelledby="hero-title">
        <div class="hero-card" data-parallax="0.08">
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
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <section id="map" class="section reveal section-shell shell-contrast" aria-labelledby="map-title">
        <h2 id="map-title">Interaktiv juridisk översiktskarta</h2>
        <p class="lead">Klicka på en domän för att hoppa till detaljerad genomgång med åtgärder, risknivå och ansvar.</p>
        <div class="map-grid">
            <?php foreach ($domains as $domain): ?>
                <a class="map-node glass" href="#<?= esc($domain['id']) ?>" style="--node-color: <?= esc($domain['color']) ?>; text-decoration:none; color: inherit;">
                    <h3><?= esc($domain['title']) ?></h3>
                    <p><?= esc($domain['summary']) ?></p>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <section id="domains" class="section reveal section-shell" aria-labelledby="domain-title">
        <h2 id="domain-title">Huvudkategorier och underkategorier</h2>
        <p class="lead">Varje regelverk nedan visar <em>vad det är</em>, <em>varför det påverkar utvecklaren</em>, <em>tekniska åtgärder</em> och <em>juridisk risk</em>.</p>
        <?php foreach ($domains as $domain): ?>
            <article id="<?= esc($domain['id']) ?>" class="domain glass reveal" style="--domain-color: <?= esc($domain['color']) ?>;">
                <header>
                    <h3><?= esc($domain['title']) ?></h3>
                    <span class="chip" style="border-color: <?= esc($domain['color']) ?>; color: <?= esc($domain['color']) ?>;">Expandera</span>
                </header>
                <div class="content">
                    <?php foreach ($domain['frameworks'] as $framework): ?>
                        <section class="framework">
                            <h4><?= esc($framework['name']) ?></h4>
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
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <section id="riskzones" class="section reveal section-shell shell-contrast" aria-labelledby="risk-title">
        <h2 id="risk-title">Riskzoner (visuellt markerade)</h2>
        <div class="risk-zones">
            <?php foreach ($riskZones as $zone): ?>
                <article class="risk-card glass">
                    <h3><?= esc($zone['title']) ?></h3>
                    <p><strong>Påverkan:</strong> <?= esc($zone['impact']) ?></p>
                    <p><?= esc($zone['detail']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="actions" class="section reveal section-shell" aria-labelledby="action-title">
        <h2 id="action-title">Avancerad compliance-nivå: tekniska åtgärdsmönster</h2>
        <div class="glass" style="padding: 1rem 1.2rem;">
            <ul class="tight">
                <li><strong>Privacy by Design:</strong> default-off tracking, dataminimerade formulär, pseudonymisering och per-feature DPIA-trigger.</li>
                <li><strong>Secure SDLC:</strong> hotmodellering, SAST/DAST, code review-policy, signerade releaser och sårbarhets-SLA.</li>
                <li><strong>API-ansvar:</strong> scopes med minst privilegium, schema-validering, rate limiting, mTLS där relevant och revisionslogg per klient.</li>
                <li><strong>Loggning & bevisbörda:</strong> oföränderlig loggkedja, tidsstämplar synkade via NTP, exportbar audit trail för tillsyn.</li>
                <li><strong>Moln & tredjeland:</strong> datalokaliseringskontroller, underbiträdesövervakning, krypteringsnycklar under kundkontroll.</li>
                <li><strong>Driftansvar:</strong> backup/restore-test, failover-övningar, least privilege i drift och incidentövningar med juridikteam.</li>
            </ul>
        </div>
    </section>

    <section id="agency" class="section reveal section-shell shell-contrast" aria-labelledby="agency-title">
        <h2 id="agency-title">Byrå- och avtalsansvar</h2>
        <div class="glass" style="padding: 1rem 1.2rem;">
            <ul class="tight">
                <?php foreach ($agencyResponsibilities as $item): ?>
                    <li><?= esc($item) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <section id="matrix" class="section reveal section-shell" aria-labelledby="matrix-title">
        <h2 id="matrix-title">Compliance-matris</h2>
        <div class="glass" style="padding: .4rem; overflow-x: auto;">
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
    </section>

    <section id="checklist" class="section reveal section-shell shell-contrast" aria-labelledby="checklist-title">
        <h2 id="checklist-title">Fullständig utvecklar-checklista</h2>
        <ul class="checklist" aria-label="Utvecklarchecklista">
            <?php foreach ($checklist as $point): ?>
                <li><?= esc($point) ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section id="summary" class="section reveal section-shell" aria-labelledby="summary-title">
        <h2 id="summary-title">Visuell sammanfattning av hela regelstrukturen</h2>
        <div class="glass" style="padding: 1rem 1.2rem;">
            <p class="lead">Den praktiska prioriteringsordningen för 2026: <strong>(1) dataskydd + cookies</strong> → <strong>(2) säkerhet/NIS2 + incidentberedskap</strong> → <strong>(3) konsument/e-handel</strong> → <strong>(4) AI/DSA/dataregler</strong> → <strong>(5) tillgänglighet och sektorskrav</strong> → <strong>(6) avtal/IP/licenser</strong>. Alla områden måste dokumenteras med tekniskt bevismaterial.</p>
            <div class="chip-row">
                <span class="chip">Juridik + teknik + UX måste designas tillsammans.</span>
                <span class="chip">Ingen compliance utan loggbar beviskedja.</span>
                <span class="chip">Policytext utan implementation är inte efterlevnad.</span>
            </div>
        </div>
    </section>

    <footer>
        <p>Detta är ett arbetsverktyg för utvecklingsteam, jurister och byråer i svenska kundprojekt 2026. Bedöm alltid kundens branschspecifika krav (t.ex. vård, finans, offentlig sektor, edtech, medtech, kritisk infrastruktur) innan go-live.</p>
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
        header.addEventListener('click', () => {
            domain.classList.toggle('open');
            header.querySelector('.chip').textContent = domain.classList.contains('open') ? 'Kollapsa' : 'Expandera';
        });
    });

    // Subtle animated background particles.
    const canvas = document.getElementById('bg-canvas');
    const ctx = canvas.getContext('2d');
    let w = 0, h = 0;
    const dots = Array.from({ length: 55 }, () => ({
        x: Math.random(), y: Math.random(),
        r: Math.random() * 2 + 0.4,
        dx: (Math.random() - 0.5) * 0.0007,
        dy: (Math.random() - 0.5) * 0.0007,
    }));

    function resize() {
        w = canvas.width = window.innerWidth * devicePixelRatio;
        h = canvas.height = window.innerHeight * devicePixelRatio;
    }

    function draw() {
        ctx.clearRect(0, 0, w, h);
        dots.forEach((d) => {
            d.x += d.dx;
            d.y += d.dy;
            if (d.x < 0 || d.x > 1) d.dx *= -1;
            if (d.y < 0 || d.y > 1) d.dy *= -1;
            ctx.beginPath();
            ctx.arc(d.x * w, d.y * h, d.r * devicePixelRatio, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(121, 242, 255, 0.28)';
            ctx.fill();
        });
        requestAnimationFrame(draw);
    }

    window.addEventListener('resize', resize);
    resize();
    draw();
})();
</script>
</body>
</html>
