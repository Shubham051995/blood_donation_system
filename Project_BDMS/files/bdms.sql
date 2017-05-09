-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 05:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bdms_admin`
--

CREATE TABLE `bdms_admin` (
  `id` int(11) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdms_admin`
--

INSERT INTO `bdms_admin` (`id`, `loginid`, `pass`) VALUES
(1, 'shubham', 'shubham');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('Shubham Agarwal', 'rahulagarwal041999@gmail.com', 'hello'),
('tony', 'ra3558266@gmail.com', 'hyy'),
('tony', 'ra3558266@gmail.com', 'hyy');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `bloodgroup` varchar(10) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` decimal(10,0) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `additionalnote` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`bloodgroup`, `firstname`, `lastname`, `email`, `phone`, `address`, `additionalnote`) VALUES
('A+', 'Shubham', 'Agarwal', 'ra3558266@gmail.com', '8952846906', 'vki,jaipur', 'hello'),
('O+', 'tony', 'Agarwal', 'rahulagarwal041999@gmail.com', '8952846906', 'vki,jaipur', 'hyy'),
('AB-', 'chotu', 'agarwal', 'rahulagarwal041999@gmail.com', '7611077120', 'vki,jaipur', 'hello this is chotu.\nI am 18 yaers old.'),
('A+', 'tony', 'agarwal', 'rahulagarwal041999@gmail.com', '7611077120', 'vki,jaipur', 'bhjdegufhkcfjndsjghgfuhbvmdnbvjdfygnmdngvhjdgfuhbcm dnbvnghufhawkcnmvbdfhjghsknx snej  hkjnfs hjegfs  zdxnmvbdrjfgnemc swkjs vd jeshfjd vs nsbjdehbnsc sn jhfjs   sjfnhjfbsv sjfsbcm snmvbswiufhkc sncbhjugv jsbfjhbgvm cahjcfb skjfbd vaj'),
('O-', 'shubham', 'agarwal', 'shubhamtony@gmail.com', '45566246', 'test', 'test'),
('A+', 'tony', 'aga', 'shubha.tony@gmail.com', '790654321', 'jaipur', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `Gmail` varchar(30) DEFAULT NULL,
  `Receiver` varchar(30) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`Gmail`, `Receiver`, `Subject`, `Message`) VALUES
('shubha.tony@gmail.com', 'rahul@gmail.com', 'Test', 'test'),
('test', 'test', 'hello', 'hello'),
('test', 'helllo', 'jaiur', 'woow');

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `bloodgroup` varchar(10) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` decimal(10,0) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `additionalnote` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`bloodgroup`, `firstname`, `lastname`, `email`, `phone`, `address`, `additionalnote`) VALUES
('A+', 'tony', 'agarwal', 'rahulagarwal041999@gmail.com', '7611077120', 'vki,jaipur', 'hello'),
('B+', 'shubham', 'aggarwal', 'rahulagarwal041999@gmail.com', '45566246', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE `tbl_content` (
  `content_id` int(10) DEFAULT NULL,
  `page_id` int(10) NOT NULL,
  `context` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`content_id`, `page_id`, `context`) VALUES
(0, 0, 'The need for blood\r\nWe need to make sure that we have enough supplies of all blood groups and blood types to treat all types of conditions.\r\n\r\nBy giving blood, every donor helps us meet the challenge of providing life-saving products whenever and wherever they are needed.\r\n\r\nMaintaining the blood supply\r\n\r\nWe need to maintain a regular supply of all blood groups and types so we can provide it to the hospitals and patients who need it.  \r\n\r\nSome rare sub-types are more common in Black communities, which is why we need more blood donors from Black, Asian and minority ethnic communities. \r\n\r\nWe sometimes need to target specific blood types to increase stock levels. That\'s why we sometimes contact regular donors with the particular blood type we need, and ask them to give blood.\r\n\r\nWe are indebted to our regular blood donors for their role in helping us to save lives.\r\n\r\nRare blood types\r\n\r\nO Rh negative blood is rare but essential because it is the only blood type that can be given to anyone, regardless of their blood type.\r\n\r\nDonors with the blood group B Rh positive are more often found in Black and south Asian minority ethnic communities.\r\n\r\nSimilarly, some rare subtypes, such as Ro, are more common in Black communities. More about the need for blood donors from Black, Asian and minority ethnic communities.\r\n\r\nBlood components\r\n\r\nYour blood\'s main components are red cells, plasma and platelets. These are used to treat many different illnesses and conditions.\r\n\r\nThey have a short shelf life, so we always need to top up the supply:\r\n\r\nred blood cells can be stored for up to 35 days\r\nplatelets can be stored for up to 7 days\r\nplasma can be stored for up to 3 years'),
(1, 1, 'How blood is used\r\nBlood or the components of blood are used to treat patients with medical conditions such as anaemia, cancer blood disorders, and those having surgery.\r\n\r\nBlood components\r\n\r\nBlood is made up of a number of components, including red blood cells, platelets and plasma. Each of these can be used to treat many different conditions.\r\n\r\nBlood is usually separated into its individual components or parts, so a patient can be given the particular component they need.\r\n\r\nThis makes the most of every blood donation, as the components in one unit of blood (or one donation) can be used to treat different patients.\r\n\r\nBlood transfusions\r\n\r\nDonated blood or components are given to a patient in a blood transfusion. Blood transfusions are given via an intravenous line into a blood vessel.\r\n\r\nHow blood was used in 2014, according to hospital usage:\r\n\r\n67% was used to treat medical conditions including anaemia, cancer and blood disorders\r\n27% was used in surgery, including cardiac surgery and emergency surgery\r\n6% was used to treat blood loss after childbirth\r\nUsage varies between hospitals depending on their particular specialties. \r\n\r\nNHS Blood and Transplant works closely with hospitals to make sure valuable blood donations are used appropriately. \r\n\r\nThe demand for blood from hospitals has fallen due to increased efficiency, but new donors are always needed to make sure there is enough blood to treat those who need it. \r\n\r\nBlood transfusions for people who are dying\r\n\r\nBlood can be vital for people with medical conditions or who are having surgery. But blood transfusions can also improve the quality of life for people whose illness has no cure.\r\n\r\nKaren Clarke, a community nurse who gives transfusions to terminally ill people in their own homes, says: \'These vital transfusions give patients a better quality of life and the energy and ability to enjoy this precious, final time with their families\'.'),
(2, 2, 'Who you could help\r\nYour blood saves lives. Your blood donation is an amazing gift to people who need it in an emergency or for on-going medical treatment. \r\n\r\nWe need over 6,000 people to give blood every day to meet the needs of hospitals and patients. Find out how donated blood is used.'),
(3, 3, 'Occupation considerations\nThere are some occupations, activities or hobbies that may be affected by donating blood on the same day, or within 24 hours, of undertaking your occupation or activity.'),
(4, 4, 'Men who have sex with men\nMen who last had sexual contact with another man more than 12 months ago are able to give blood if they meet the other blood donor selection criteria.\n\nEnsuring blood supplies are safe\n\nAnyone can acquire a blood-borne virus or a sexually transmitted disease, but some people have an increased risk of exposure.\n\nThey may not be able to give blood at all, or for a certain period of time.\n\nThis keeps the blood supply safe and reduces the risk of transmitting an infection to a person receiving blood.\n\nStatistically, men who have sex with men have a higher risk of acquiring blood-borne diseases, infections and viruses.\n\nUsing protection like a condom can reduce this risk, but it doesn’t eliminate it. \n\nThat is why we can’t collect blood from men who have had oral or anal sex with men, with or without protection, in the last 12 months.\n\nThis isn’t meant to be discriminatory. It’s not based on anyone’s sexual history or sexuality. It reflects statistical risks for the sexual behaviour that increases the risk of virus transmission.\n\nThere are many reasons why someone may not be able to donate, see these in the health and travel sections.\n\nThis makes sure blood supplies provided to hospitals are safe and free from viruses and infections.\n\nWe appreciate that it can be disappointing if you want to give blood but don’t meet the donor selection criteria.\n\nDecisions about who can give blood\n\nWe are responsible for safely collecting blood and providing safe supplies to hospitals.\n\nWe are not responsible for making the decisions or setting the criteria about who can give blood.\n\nThe Department of Health decides who can or can’t give blood based on independent advice from the Advisory Committee on the Safety of Blood, Tissues and Organs (SaBTO).\n\nWe follow the decisions they make, to ensure blood transfusions are safe for patients.\n\nChanges to decisions about who can give blood\n\nBefore 2011 men who had sex with men were permanently excluded from giving blood.\n\nThis changed to a 12 month exclusion in 2011, following a review of the statistical risks by SaBTO.\n\nMajor HIV charities including the Terrence Higgins Trust supported this change.\n\nThere are campaigns that support the demand for the current 12 month exclusion that applies to men who have sex with men to be reviewed.\n\nSaBTO set up a working group in April 2016 to review the current donor acceptance criteria and look at any available new evidence.\n\nWhy a 12 months deferral?\n\nWe carry out many tests on blood to check it’s safe to give to patients.\n\nThere is a small possibility the tests we carry out are not able to pick up recently acquired infections.\n\nIf someone was to donate blood during this time, known as a window period, it would be possible to transmit an infection.\n\nThis includes infections like hepatitis B virus (HBV). It can take up to 12 months for an HBV infection to clear.\n\nAs men who have sex with men in the UK continue to be at a statistically higher risk of contracting blood-borne viruses such as HBV, the deferral time is 12 months.\n\nWe know this can be disappointing if you wish to give blood. But, it is extremely important that you respect and adhere to this and all other donor selection criteria so we continue to maintain a safe blood supply.  \n\nThe tests that we carry out on blood\n\nEvery blood donation is tested for infections including:\n\nHuman Immunodeficiency Virus (HIV)\nHepatitis B virus (HBV)\nHepatitis C virus (HCV)\nHuman T-cell Lymphotropic Virus (HTLV)\nSyphilis\nAdditional tests may be carried out on blood from donors who are at increased risk of certain infections, for example due to travel or residence in certain countries.'),
(5, 5, 'Donors and disability\r\nEveryone can volunteer to give blood, whether they have a disability or not. However, we must make sure that it’s safe for people to give blood and for patients to receive donated blood.\r\n\r\nWe need to be certain that anyone who wants to give blood understand what’s involved, how they will feel, and the things they’ll need to do afterwards to take care of themselves. If we think that someone doesn’t completely understand, we can’t let them give blood.\r\n\r\nBringing a carer\r\n\r\nCarers are welcome: we just ask that they introduce themselves to a member of staff. They can accompany you throughout the donation process, apart from the private screening; this is to maintain confidentiality.\r\n\r\nAccessibility and wheelchair users\r\n\r\nAll of our donor centres are wheelchair-accessible: you can call them before booking for more detailed information about the facilities they offer. Not all of our community-based venues (eg church halls and community centres) will be accessible – if possible, we suggest you contact the venue before booking a donation session.\r\n\r\nIf you use a wheelchair and come on your own, you must be able to get from your wheelchair to the donation beds or chairs and back again. Our staff aren’t allowed to help you, due to Health and Safety Guidelines.\r\n\r\nIf you bring a carer, they’re allowed to help you on and off the donation beds or chairs.\r\n\r\nDisability dogs\r\n\r\nDisability dogs are welcome: we simply ask that they stay outside the donation area.\r\n\r\n\r\nYou may bring a signer or translator. However, if you need a signer or translator (third party interpreter) to be present at any part of the selection procedure where there is an exchange of confidential information (such as during the health screening process), they must:\r\n\r\na) Understand the requirements of the Blood Safety and Quality Regulations relevant to the donation process.\r\n\r\nb) Not be personally known to the donor.\r\n\r\nPlease be aware that NHS Blood and Transplant do not routinely provide a signing or translation service at our blood donation sessions. Although we have some donation staff who are British Sign Language certified and may be able to act as a third party interpreter, we cannot guarantee the availability of this service at all blood donation sessions.\r\n\r\nVisual Impairment\r\n\r\nWe have large print versions of the welcome folder and Donor Health Check Questionnaire. We can also talk you through the questionnaire.\r\n\r\nIf you have colour blindness or dyslexia, you can ask for coloured overlays at the welcome desk.'),
(6, 6, 'Registering online\r\nNew or existing blood donors can use our online service to book an appointment to give blood in India. New donors must be aged between 17-65.\r\n\r\nCreate an online account\r\n\r\nIt’s quick and easy. You can:\r\n\r\nfind out where you can donate and book an appointment\r\nview, change or cancel appointments\r\nupdate your personal details\r\nview your recent donation history within the last 5 years\r\nYou\'ll need a personal email address that only you can access. You can watch a video that explains how to register online. \r\n\r\nCreate an online account.\r\n\r\nUsing your online account\r\n\r\nAfter you have created your online account you can sign in and manage your account online. See our video guides which explain how to get the most out of your online account.'),
(7, 7, 'Preparing to give blood\r\nFollow our tips to make your blood donation experience pleasant, safe and straightforward.\r\n\r\nEat\r\n\r\nYou should not donate on an empty stomach. Eating regularly before donating will help to keep your blood sugar levels stable. This is important so that you don’t feel lightheaded or dizzy after your donation. Having a snack before donation can help maintain these blood sugar levels. Ensuring that your diet contains foods rich in iron - such as meats and green leafy vegetables - will help to keep you feeling well during and after donation.\r\n\r\nDrink\r\n\r\nAlmost half of the blood that you donate is made up of water. The fluids that you lose during donation can cause a drop in blood pressure – causing you to feel faint and dizzy.\r\n\r\nTo help prevent this from happening we ask you to drink 500ml of water immediately before you give blood - we’ll give this to you before you donate.\r\n\r\nIt’s also important to ensure that you are well hydrated in the days leading up to your donation. This will help to compensate for the fluids lost during donation, and will help to bring your blood volume levels back to normal.\r\nIt is essential to avoid alcohol before and after donating as this may affect hydration levels and delay recovery.\r\n\r\nExercise\r\n\r\nAvoid doing any vigorous exercise or heavy lifting the day of your donation – both before and after you’ve given blood.\r\n\r\nKeeping your body in a rested state is important to give it a chance to replenish the fluids lost during donation, which will help you avoid feeling dizzy or lightheaded and keep you well. Light exercise such as walking is fine, but please make sure that you are fully recovered and hydrated prior to your donation.\r\n\r\nWear\r\n\r\nWe will need to roll up your sleeve past your elbow when you give blood – to allow easy access to your veins. To make sure that you are comfortable, please wear clothing with loose sleeves.\r\n\r\nDistract\r\n\r\nIt is normal to feel nervous when you come along to donate – particularly if this is your first time. Our friendly and helpful staff will put you at ease straightaway. \r\nDistraction is key. You may want to bring a friend to wait with you, or feel free to bring a book to read or listen to some music while you donate.\r\n\r\nWe also ask donors to undertake something called ‘applied muscle tension’ or AMT. This is a simple behavioural technique that helps to maintain blood pressure, and so stops you from feeling faint or unwell. It is also a brilliant distraction technique! AMT involves tensing and relaxing the body’s major muscles during the donation process. A favourite of ours is clenching and unclenching your buttock muscles (no joke!).\r\n\r\nFurther information about this will be available at your donation, or simply ask a member of staff who will be happy to advise you further.\r\n\r\nKnow\r\n\r\nOnce you’ve made the decision to donate, and made the effort to go along to a session or Donor Centre, you want to be sure that you can actually give blood.\r\n\r\nIf you’ve been travelling recently, have had a tattoo or a piercing, are on medication or are undergoing medical investigations, you can check whether you’re still ok to donate by doing a simple eligibility check using our online knowledge base or by calling us on 0300 123 23 23.\r\n\r\nSleep\r\n\r\nWe recommend that you have a full night’s sleep of between 7 to 9 hours the night before your donation. This will help you to feel more alert when you give blood, which will in turn reduce the risk of feeling unwell.\r\n\r\nNow you know how to prepare yourself, view our donation animation to find out what happens when you give blood. '),
(8, 8, 'Welcome and preparation\r\n\r\nBefore donating blood, please eat regular meals, drink plenty of fluid (non-alcoholic) and avoid vigorous exercise or exertion.\r\n\r\nWhen you attend your donation session please read our Welcome leaflet: this explains the importance of blood safety. It\'s impWelcome and preparation\r\n\r\nBefore donating blood, please eat regular meals, drink plenty of fluid (non-alcoholic) and avoid vigorous exercise or exertion.\r\n\r\nWhen you attend your donation session please read our Welcome leaflet: this explains the importance of blood safety. It\'s important to read this every time you attend, because advice does change.\r\n\r\nWe must give you sufficient information so that you can make an informed choice, on the benefits and risks of donating blood and samples for testing.\r\n\r\nWe will provide 500ml of fluid just before you donate. By drinking this over about 5 minutes, it will help with your wellbeing during and after donation.\r\n\r\nHealth screening\r\n\r\nYou will be called for private health screening, where a donor carer will confirm your identity. It’s critical that we guarantee an accurate link between you, your Donor Health Check and your donation.\r\n\r\nWe must ensure that it\'s safe for you to donate and your donation is safe for a patient to receive. We’ll ask some confidential questions based on your completed Donor Health Check.\r\n\r\nThere is a period of time from contact with any infection to detecting markers in the laboratory. We trust your honesty when answering these personal questions. This will ensure your blood is safe to transfuse to patients.\r\n\r\nYou may be referred to a registered nurse for certain medical queries: their uniforms have red piping on the collar and cuffs. An explanation will always be provided if you are not able to donate. You will be advised when you can donate, and we’ll encourage you to make an appointment before you leave (the team are only able to book future appointments for the venue they are currently at).\r\n\r\nFor your wellbeing, we must ensure you have enough haemoglobin (iron) in your blood before donating. A small blood sample will be taken from your finger to test your haemoglobin levels. If your test is borderline, we will offer you a confirmatory test. This requires a sample of blood from your arm, to be tested in a machine at the session. We will advise you of the result.\r\n\r\nFollowing health screening, you will be asked to sit in a different waiting area. From here you’ll be called and invited to a donation chair.\r\n\r\nYour donation\r\n\r\nWhen you are comfortable on the chair, you will be asked your name, address and date of birth again.\r\n\r\nBlood bags and sample tubes are labelled with unique donor identification numbers. All collection equipment is single use and sterile; only one blood bag is filled with your donation.\r\n\r\nA blood pressure cuff will be placed on your arm to maintain a small amount of pressure during your donation. The cuff is not used to measure blood pressure.\r\n\r\nYour arm will be thoroughly examined to find a suitable vein before being cleaned with an antiseptic sponge. This kills normal bacteria (germs) on the skin. You will see staff cleaning their hands frequently, using hand wipes or gels.\r\n\r\nDonors are advised to do applied muscle tension exercises during donation. This is to maintain blood pressure and promote wellbeing during and after donation.\r\n\r\nFollowing needle insertion you should be comfortable during your donation. If you experience any discomfort or pain please alert a member of staff.\r\n\r\nAn agitator scale constantly weighs and measures your donation. It will stop automatically when your donation is complete. Donor carers will be available to you throughout your donation.\r\n\r\nYou may hear beeping noises from the agitator, these inform us of the progress of your donation. A full donation is 470ml and will usually take between 5 and 10 minutes.\r\n\r\nIf you require assistance or have any concerns, please make us aware by raising your non-donation arm. After donation, the needle will be removed and a sterile dressing applied to your arm.\r\n\r\nWe advise that you leave the pressure roll on for 30 minutes and the plaster dressing on for 6 hours. Please avoid using this arm to push on or to carry anything heavy.\r\n\r\nWe will give you a card at the end of your donation with important care advice. Donors are also asked to apply additional pressure to the venepuncture site while waiting for their drink at the refreshment area.\r\n\r\nAfter donation refreshment\r\n\r\nA selection of drinks and snacks are available at the refreshment table. We encourage donors to relax here for at least 15 minutes and to have at least 2 drinks following donation.\r\n\r\nIf you feel unwell, please remain seated and alert a member of staff immediately. Where possible, we encourage you to book an appointment for your next donation.\r\n\r\nAt home\r\n\r\nIf you become unwell (other than a cold or cold-sore) within 2 weeks following your donation, or if you believe there is a reason your blood should not be given to a patient, please call our donor helpline on 0300 123 23 23.\r\n\r\nPlease do not have a hot bath on the day of your donation. ortant to read this every time you attend, because advice does change.\r\n\r\nWe must give you sufficient information so that you can make an informed choice, on the benefits and risks of donating blood and samples for testing.\r\n\r\nWe will provide 500ml of fluid just before you donate. By drinking this over about 5 minutes, it will help with your wellbeing during and after donation.\r\n\r\nHealth screening\r\n\r\nYou will be called for private health screening, where a donor carer will confirm your identity. It’s critical that we guarantee an accurate link between you, your Donor Health Check and your donation.\r\n\r\nWe must ensure that it\'s safe for you to donate and your donation is safe for a patient to receive. We’ll ask some confidential questions based on your completed Donor Health Check.\r\n\r\nThere is a period of time from contact with any infection to detecting markers in the laboratory. We trust your honesty when answering these personal questions. This will ensure your blood is safe to transfuse to patients.\r\n\r\nYou may be referred to a registered nurse for certain medical queries: their uniforms have red piping on the collar and cuffs. An explanation will always be provided if you are not able to donate. You will be advised when you can donate, and we’ll encourage you to make an appointment before you leave (the team are only able to book future appointments for the venue they are currently at).\r\n\r\nFor your wellbeing, we must ensure you have enough haemoglobin (iron) in your blood before donating. A small blood sample will be taken from your finger to test your haemoglobin levels. If your test is borderline, we will offer you a confirmatory test. This requires a sample of blood from your arm, to be tested in a machine at the session. We will advise you of the result.\r\n\r\nFollowing health screening, you will be asked to sit in a different waiting area. From here you’ll be called and invited to a donation chair.\r\n\r\nYour donation\r\n\r\nWhen you are comfortable on the chair, you will be asked your name, address and date of birth again.\r\n\r\nBlood bags and sample tubes are labelled with unique donor identification numbers. All collection equipment is single use and sterile; only one blood bag is filled with your donation.\r\n\r\nA blood pressure cuff will be placed on your arm to maintain a small amount of pressure during your donation. The cuff is not used to measure blood pressure.\r\n\r\nYour arm will be thoroughly examined to find a suitable vein before being cleaned with an antiseptic sponge. This kills normal bacteria (germs) on the skin. You will see staff cleaning their hands frequently, using hand wipes or gels.\r\n\r\nDonors are advised to do applied muscle tension exercises during donation. This is to maintain blood pressure and promote wellbeing during and after donation.\r\n\r\nFollowing needle insertion you should be comfortable during your donation. If you experience any discomfort or pain please alert a member of staff.\r\n\r\nAn agitator scale constantly weighs and measures your donation. It will stop automatically when your donation is complete. Donor carers will be available to you throughout your donation.\r\n\r\nYou may hear beeping noises from the agitator, these inform us of the progress of your donation. A full donation is 470ml and will usually take between 5 and 10 minutes.\r\n\r\nIf you require assistance or have any concerns, please make us aware by raising your non-donation arm. After donation, the needle will be removed and a sterile dressing applied to your arm.\r\n\r\nWe advise that you leave the pressure roll on for 30 minutes and the plaster dressing on for 6 hours. Please avoid using this arm to push on or to carry anything heavy.\r\n\r\nWe will give you a card at the end of your donation with important care advice. Donors are also asked to apply additional pressure to the venepuncture site while waiting for their drink at the refreshment area.\r\n\r\nAfter donation refreshment\r\n\r\nA selection of drinks and snacks are available at the refreshment table. We encourage donors to relax here for at least 15 minutes and to have at least 2 drinks following donation.\r\n\r\nIf you feel unwell, please remain seated and alert a member of staff immediately. Where possible, we encourage you to book an appointment for your next donation.\r\n\r\nAt home\r\n\r\nIf you become unwell (other than a cold or cold-sore) within 2 weeks following your donation, or if you believe there is a reason your blood should not be given to a patient, please call our donor helpline on 0300 123 23 23.\r\n\r\nPlease do not have a hot bath on the day of your donation. '),
(9, 9, 'After your donation\r\nDuring a blood donation we take 470ml of blood, which is just under a pint.\r\n\r\nYour donation is transported to one of our blood centres where it is tested and processed before being issued to hospitals. If you’ve ever wondered what happens to your blood donation view our animation.\r\n\r\nAfter donation, your body has an amazing capacity to replace the blood you have given.\r\n\r\nTo help you stay well after you have given blood, we advise you to:\r\n\r\nkeep the pressure bandage on your arm for about 30 minutes after you have given blood, and the plaster on for 6 hours\r\nrest for a short time after giving blood\r\neat and drink – you will be encouraged to have at least 2 drinks and a snack before you leave\r\navoid using the donation arm to carry anything very heavy for the rest of the day\r\navoid having a hot bath after you have given blood.\r\n\r\nIf you feel faint (light headed or dizzy, hot, sweating, trembling, shaky or nauseous) lie down immediately, rest until you feel better and drink plenty of fluid.\r\n\r\nIf bleeding recurs, sit down, raise your arm and press on the area where the blood is coming from for at least 5 minutes.\r\n\r\n'),
(10, 10, 'About our donation venues\r\nYou can give blood at any of our blood donation venues in India.\r\n\r\nThere are two types of donation venue where you can give blood - permanent blood donor centres and community-based venues.\r\n\r\nCommunity-based venues\r\n\r\nThese are our most common type of blood donation venue and involve us setting up a temporary blood donation centre within your local community.\r\n\r\nThese can take place in a number of locations – for example church halls, sports centres, mosques, football stadiums and hotels. Find your local blood donation venue and book an appointment.\r\n\r\nWe usually visit these venues 2 or 3 times per year, but this can be more often, depending on the number of local blood donors.\r\n\r\nPermanent blood donor centres\r\n\r\nWe have 23 permanent blood donation venues situated in towns and cities across India. These centres are open most days and often have better appointment availability. Click on your nearest centre below for location information and to book an appointment.'),
(11, 11, 'Further information\r\nInformation and leaflets offering advice for blood donors, including the tests we carry out on blood, and what to do if you feel faint after you give blood.\r\n\r\nBlood tests we carry out:\r\n\r\nTests we carry out\r\nHaemoglobin and iron checks:\r\n\r\nHaemoglobin and iron\r\nIf you suffer from bruising after giving blood:\r\n\r\nBruising\r\nIf you feel faint after giving blood:\r\n\r\nFeeling faint\r\nIf an arterial puncture occurs when you give blood:\r\n\r\nArterial puncture'),
(12, 12, 'Recognising donors\r\nBlood and platelet donors do an amazing thing when they donate. Without their kind generosity, many patients simply would not be alive today.\r\n\r\nWe believe that every donation counts. We hope you feel thanked and appreciated every time you give blood, and we want you to know just how important you are to us. \r\n\r\nGifts and acknowledgements for our donors\r\n\r\nWe give our regular blood and platelet donor gifts and acknowledgements which mark important donation milestones. As a frequent and valued donor you can expect to receive:\r\n\r\n1st - Welcome and thank you pack, including red donor card and key fob\r\n\r\n5th – Bronze donor card\r\n\r\n10th - Badge and certificate\r\n\r\n25th – Silver donor card, badge and certificate\r\n\r\n50th – Gold donor card, badge and certificate\r\n\r\n75th – Emerald donor card, badge and certificate\r\n\r\n100th - Ceremony invitation (whole blood donors), ruby donor card, commemorative medal, badge and certificate\r\n\r\n150th - Certificate\r\n\r\n250th - Ceremony invitation (platelet donors), commemorative medal, badge and certificate\r\n\r\n500th - Special framed certificate\r\n\r\n750th - Special framed certificate\r\n\r\n1000th - Special framed certificate\r\n\r\nIf you have registered as a donor online you can see how many whole blood donations you have made to-date.\r\n\r\nThank you so much for all of your donations. So few of the population give blood at all, and fewer still reach these incredible milestones, so it really is a great achievement and one worth shouting about! We hope that you accept these small tokens with pride. Well done!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `page_id` int(11) DEFAULT NULL,
  `page_name` varchar(30) DEFAULT NULL,
  `int_parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`page_id`, `page_name`, `int_parent`) VALUES
(1, 'How Blood Is Used', 1),
(2, 'Who You Could Help', 1),
(3, 'Occupations Considerations', 2),
(4, 'Men Who Have Sex With Men', 2),
(5, 'Donors And Disability', 2),
(6, 'Registering Online', 3),
(7, 'Preparing To give Blood', 3),
(8, 'What Happens On The Day', 3),
(9, 'After Your Donation', 3),
(10, 'About Our Donation Venues', 3),
(11, 'Further Information', 3),
(12, 'Recognising Donors', 3),
(0, 'The Need Of Blood', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdms_admin`
--
ALTER TABLE `bdms_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD KEY `page_id` (`page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bdms_admin`
--
ALTER TABLE `bdms_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD CONSTRAINT `tbl_pages_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `tbl_content` (`page_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
