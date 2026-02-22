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
            --bg: #090b14;
            --text: #ecf2ff;
            --muted: #b9c4e1;
            --card: rgba(18, 24, 44, 0.55);
            --stroke: rgba(255, 255, 255, 0.13);
            --shadow: 0 16px 60px rgba(0, 0, 0, 0.35);
            --radius: 18px;
            --easing: cubic-bezier(.22, .8, .26, 1);
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            color: var(--text);
            background: radial-gradient(circle at 10% 10%, #14213d 0%, transparent 35%),
                        radial-gradient(circle at 85% 20%, #1b2f66 0%, transparent 38%),
                        linear-gradient(130deg, #090b14 0%, #0f1430 45%, #090b14 100%);
            font-family: "Inter", "Segoe UI", Roboto, sans-serif;
            line-height: 1.55;
            overflow-x: hidden;
        }

        #bg-canvas {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.45;
        }

        .preloader {
            position: fixed;
            inset: 0;
            display: grid;
            place-items: center;
            background: #080b16;
            z-index: 9999;
            transition: opacity .6s var(--easing), visibility .6s var(--easing);
        }
        .preloader.hidden { opacity: 0; visibility: hidden; }
        .loader-ring {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 4px solid rgba(255,255,255,.2);
            border-top-color: #79f2ff;
            animation: spin 1s linear infinite;
            box-shadow: 0 0 30px rgba(121,242,255,.35);
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        .progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            width: 0;
            background: linear-gradient(90deg, #79f2ff, #a0ffbc, #ffd47e);
            z-index: 1200;
            box-shadow: 0 0 20px rgba(121,242,255,.5);
        }

        .nav {
            position: sticky;
            top: 0;
            z-index: 1100;
            backdrop-filter: blur(14px);
            background: rgba(10, 14, 28, 0.75);
            border-bottom: 1px solid var(--stroke);
        }
        .nav ul {
            list-style: none;
            margin: 0;
            padding: 12px clamp(1rem, 3vw, 2.5rem);
            display: flex;
            gap: 12px;
            overflow-x: auto;
        }
        .nav a {
            display: inline-flex;
            padding: 8px 14px;
            border-radius: 999px;
            color: var(--muted);
            text-decoration: none;
            border: 1px solid transparent;
            transition: .35s var(--easing);
            white-space: nowrap;
        }
        .nav a.active,
        .nav a:hover {
            color: var(--text);
            background: rgba(121,242,255,.16);
            border-color: rgba(121,242,255,.4);
            transform: translateY(-1px);
        }

        .wrap {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 clamp(1rem, 3vw, 2.5rem) 4rem;
        }

        .section-shell {
            position: relative;
            margin-top: 2.5rem;
            border-radius: 34px;
            padding: clamp(1.2rem, 2.5vw, 2rem);
            border: 1px solid rgba(255, 255, 255, 0.08);
            overflow: hidden;
            isolation: isolate;
        }
        .section-shell > * {
            position: relative;
            z-index: 2;
        }
        .section-shell::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 20% 10%, rgba(121, 242, 255, 0.2), transparent 52%),
                        linear-gradient(170deg, rgba(16, 22, 44, 0.9), rgba(8, 10, 20, 0.95));
            z-index: 1;
        }
        .shell-contrast::before {
            background: radial-gradient(circle at 82% 12%, rgba(255, 197, 126, 0.25), transparent 46%),
                        linear-gradient(165deg, rgba(18, 16, 43, 0.92), rgba(12, 7, 20, 0.95));
        }

        .section-divider {
            position: relative;
            margin: 2.2rem 0 .8rem;
            height: 80px;
            background: linear-gradient(90deg, rgba(121, 242, 255, 0.28), rgba(210, 151, 255, 0.35), rgba(255, 212, 126, 0.28));
            opacity: .78;
        }

        .hero {
            min-height: 88vh;
            display: grid;
            align-items: center;
            padding: 4.5rem 0 2.5rem;
            position: relative;
        }
        .hero-card {
            background: linear-gradient(140deg, rgba(30, 40, 75, 0.65), rgba(12, 17, 33, 0.45));
            border: 1px solid var(--stroke);
            box-shadow: var(--shadow);
            border-radius: 28px;
            padding: clamp(1.5rem, 3vw, 3rem);
            backdrop-filter: blur(18px);
        }
        .hero h1 { font-size: clamp(1.8rem, 4vw, 3.8rem); margin: 0 0 .8rem; line-height: 1.1; }
        .hero p { font-size: clamp(1rem, 1.5vw, 1.2rem); color: var(--muted); max-width: 75ch; }

        .word {
            display: inline-block;
            opacity: 0;
            transform: translateY(.55em);
            filter: blur(4px);
            margin-right: .22em;
            animation: reveal-word .6s var(--easing) forwards;
            animation-delay: calc(var(--word-index) * 90ms);
        }
        .word.cursor::after {
            content: "|";
            margin-left: .16em;
            opacity: .75;
            animation: blink 1s steps(2, end) infinite;
        }
        @keyframes reveal-word {
            to {
                opacity: 1;
                transform: translateY(0);
                filter: blur(0);
            }
        }
        @keyframes blink { 50% { opacity: 0; } }

        .chip-row { display: flex; flex-wrap: wrap; gap: .55rem; margin-top: 1.3rem; }
        .chip {
            padding: .44rem .8rem;
            border-radius: 999px;
            font-size: .82rem;
            border: 1px solid rgba(255,255,255,.2);
            background: rgba(255,255,255,.05);
        }

        .section { margin-top: 3.5rem; }
        .section h2 { font-size: clamp(1.4rem, 2.1vw, 2rem); margin: 0 0 1rem; }
        .section p.lead { color: var(--muted); margin-top: 0; }

        .glass {
            border-radius: var(--radius);
            border: 1px solid var(--stroke);
            background: var(--card);
            backdrop-filter: blur(12px);
            box-shadow: var(--shadow);
        }

        .map-grid {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        }
        .map-node {
            padding: 1rem;
            transition: transform .35s var(--easing), box-shadow .35s var(--easing);
            position: relative;
            overflow: hidden;
        }
        .map-node::after {
            content: "";
            position: absolute;
            inset: auto -15% -65% -15%;
            height: 130px;
            filter: blur(30px);
            background: radial-gradient(circle, var(--node-color), transparent 65%);
            opacity: .35;
        }
        .map-node:hover { transform: translateY(-5px); }
        .map-node h3 { margin: 0 0 .4rem; }
        .map-node p { margin: 0; color: var(--muted); font-size: .95rem; }

        .domain {
            margin-top: 1.2rem;
            overflow: hidden;
            position: relative;
        }
        .domain::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(145deg, rgba(121, 242, 255, 0.18), transparent 52%);
            opacity: .7;
            pointer-events: none;
        }
        .domain header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            padding: 1rem 1.2rem;
            cursor: pointer;
            user-select: none;
        }
        .domain header h3 { margin: 0; }
        .domain .content { max-height: 0; overflow: hidden; transition: max-height .65s var(--easing), padding .45s var(--easing); padding: 0 1.2rem; }
        .domain.open .content { max-height: 3000px; padding: 0 1.2rem 1.1rem; }
        .domain:nth-of-type(even) header {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.06), transparent);
        }
        .domain:nth-of-type(odd) header {
            background: linear-gradient(270deg, rgba(255, 255, 255, 0.05), transparent);
        }


        @supports (mask: radial-gradient(circle, #000, transparent)) {
            .section-divider {
                mask: radial-gradient(40px at 15% 40px, transparent 98%, #000) 0 0 / 120px 100% repeat-x;
            }
        }

        @supports (background: color-mix(in srgb, white, black)) {
            .domain::before {
                background: linear-gradient(145deg, color-mix(in srgb, var(--domain-color, #79f2ff) 28%, transparent), transparent 50%);
            }
        }

        .framework {
            margin-top: .9rem;
            padding: 1rem;
            border-radius: 14px;
            border: 1px solid rgba(255,255,255,.09);
            background: rgba(255,255,255,.03);
        }
        .framework h4 { margin: 0 0 .45rem; }
        .meta { display: flex; flex-wrap: wrap; gap: .6rem; margin-bottom: .4rem; font-size: .82rem; color: var(--muted); }
        .risk {
            font-weight: 600;
            color: #ffced8;
            font-size: .9rem;
        }
        ul.tight { margin: .45rem 0 .45rem 1.1rem; padding: 0; }

        .risk-zones {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 1rem;
        }
        .risk-card { padding: 1rem; border-left: 4px solid #ff688a; }
        .risk-card:nth-child(3n+1) { transform: translateY(-6px); }
        .risk-card:nth-child(3n+2) { transform: translateY(8px); }

        .matrix-table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 14px;
        }
        .matrix-table th, .matrix-table td {
            border-bottom: 1px solid rgba(255,255,255,.1);
            text-align: left;
            padding: .8rem;
            font-size: .92rem;
            vertical-align: top;
        }
        .matrix-table th { color: #d6e6ff; background: rgba(255,255,255,.04); }

        .checklist {
            columns: 2;
            column-gap: 1.3rem;
        }
        .checklist li {
            margin: 0 0 .75rem;
            break-inside: avoid;
            background: rgba(255,255,255,.03);
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 10px;
            padding: .7rem .8rem;
            list-style: none;
        }

        .reveal {
            opacity: 0;
            transform: translateY(20px) scale(.98);
            transition: opacity .75s var(--easing), transform .75s var(--easing);
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        footer {
            margin-top: 3rem;
            padding: 2rem 0 4rem;
            color: var(--muted);
            font-size: .9rem;
        }

        @media (max-width: 840px) {
            .checklist { columns: 1; }
            .hero { min-height: auto; padding-top: 2.5rem; }
            .risk-zones { grid-template-columns: 1fr; }
            .section-shell { border-radius: 24px; }
        }

        @media (prefers-reduced-motion: reduce) {
            .word,
            .word.cursor::after {
                animation: none;
                opacity: 1;
                transform: none;
                filter: none;
            }
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
