$(document).ready(function() {
			// Array of country codes with their names and dial codes
			var countryCodes = [
			{ name: 'Afghanistan', code: 'AF', dialCode: '+93' },
			{ name: 'Albania', code: 'AL', dialCode: '+355' },
			{ name: 'Algeria', code: 'DZ', dialCode: '+213' },
			{ name: 'American Samoa', code: 'AS', dialCode: '+1-684' },
			{ name: 'Andorra', code: 'AD', dialCode: '+376' },
			{ name: 'Angola', code: 'AO', dialCode: '+244' },
			{ name: 'Anguilla', code: 'AI', dialCode: '+1-264' },
			{ name: 'Antarctica', code: 'AQ', dialCode: '+672' },
			{ name: 'Antigua and Barbuda', code: 'AG', dialCode: '+1-268' },
			{ name: 'Argentina', code: 'AR', dialCode: '+54' },
			{ name: 'Armenia', code: 'AM', dialCode: '+374' },
			{ name: 'Aruba', code: 'AW', dialCode: '+297' },
			{ name: 'Australia', code: 'AU', dialCode: '+61' },
			{ name: 'Austria', code: 'AT', dialCode: '+43' },
			{ name: 'Azerbaijan', code: 'AZ', dialCode: '+994' },
			{ name: 'Bahamas', code: 'BS', dialCode: '+1-242' },
			{ name: 'Bahrain', code: 'BH', dialCode: '+973' },
			{ name: 'Bangladesh', code: 'BD', dialCode: '+880' },
			{ name: 'Barbados', code: 'BB', dialCode: '+1-246' },
			{ name: 'Belarus', code: 'BY', dialCode: '+375' },
			{ name: 'Belgium', code: 'BE', dialCode: '+32' },
			{ name: 'Belize', code: 'BZ', dialCode: '+501' },
			{ name: 'Benin', code: 'BJ', dialCode: '+229' },
			{ name: 'Bermuda', code: 'BM', dialCode: '+1-441' },
			{ name: 'Bhutan', code: 'BT', dialCode: '+975' },
			{ name: 'Bolivia', code: 'BO', dialCode: '+591' },
			{ name: 'Bosnia and Herzegovina', code: 'BA', dialCode: '+387' },
			{ name: 'Botswana', code: 'BW', dialCode: '+267' },
			{ name: 'Brazil', code: 'BR', dialCode: '+55' },
			{ name: 'British Indian Ocean Territory', code: 'IO', dialCode: '+246' },
			{ name: 'British Virgin Islands', code: 'VG', dialCode: '+1-284' },
			{ name: 'Brunei', code: 'BN', dialCode: '+673' },
			{ name: 'Bulgaria', code: 'BG', dialCode: '+359' },
			{ name: 'Burkina Faso', code: 'BF', dialCode: '+226' },
			{ name: 'Burundi', code: 'BI', dialCode: '+257' },
			{ name: 'Cambodia', code: 'KH', dialCode: '+855' },
			{ name: 'Cameroon', code: 'CM', dialCode: '+237' },
			{ name: 'Canada', code: 'CA', dialCode: '+1' },
			{ name: 'Cape Verde', code: 'CV', dialCode: '+238' },
			{ name: 'Cayman Islands', code: 'KY', dialCode: '+1-345' },
			{ name: 'Central African Republic', code: 'CF', dialCode: '+236' },
			{ name: 'Chad', code: 'TD', dialCode: '+235' },
			{ name: 'Chile', code: 'CL', dialCode: '+56' },
			{ name: 'China', code: 'CN', dialCode: '+86' },
			{ name: 'Christmas Island', code: 'CX', dialCode: '+61' },
			{ name: 'Cocos Islands', code: 'CC', dialCode: '+61' },
			{ name: 'Colombia', code: 'CO', dialCode: '+57' },
			{ name: 'Comoros', code: 'KM', dialCode: '+269' },
			{ name: 'Cook Islands', code: 'CK', dialCode: '+682' },
			{ name: 'Costa Rica', code: 'CR', dialCode: '+506' },
			{ name: 'Croatia', code: 'HR', dialCode: '+385' },
			{ name: 'Cuba', code: 'CU', dialCode: '+53' },
			{ name: 'Curacao', code: 'CW', dialCode: '+599' },
			{ name: 'Cyprus', code: 'CY', dialCode: '+357' },
			{ name: 'Czech Republic', code: 'CZ', dialCode: '+420' },
			{ name: 'Democratic Republic of the Congo', code: 'CD', dialCode: '+243' },
			{ name: 'Denmark', code: 'DK', dialCode: '+45' },
			{ name: 'Djibouti', code: 'DJ', dialCode: '+253' },
			{ name: 'Dominica', code: 'DM', dialCode: '+1-767' },
			{ name: 'Dominican Republic', code: 'DO', dialCode: '+1-809, +1-829, +1-849' },
			{ name: 'East Timor', code: 'TL', dialCode: '+670' },
			{ name: 'Ecuador', code: 'EC', dialCode: '+593' },
			{ name: 'Egypt', code: 'EG', dialCode: '+20' },
			{ name: 'El Salvador', code: 'SV', dialCode: '+503' },
			{ name: 'Equatorial Guinea', code: 'GQ', dialCode: '+240' },
			{ name: 'Eritrea', code: 'ER', dialCode: '+291' },
			{ name: 'Estonia', code: 'EE', dialCode: '+372' },
			{ name: 'Ethiopia', code: 'ET', dialCode: '+251' },
			{ name: 'Falkland Islands', code: 'FK', dialCode: '+500' },
			{ name: 'Faroe Islands', code: 'FO', dialCode: '+298' },
			{ name: 'Fiji', code: 'FJ', dialCode: '+679' },
			{ name: 'Finland', code: 'FI', dialCode: '+358' },
			{ name: 'France', code: 'FR', dialCode: '+33' },
			{ name: 'French Polynesia', code: 'PF', dialCode: '+689' },
			{ name: 'Gabon', code: 'GA', dialCode: '+241' },
			{ name: 'Gambia', code: 'GM', dialCode: '+220' },
			{ name: 'Georgia', code: 'GE', dialCode: '+995' },
			{ name: 'Germany', code: 'DE', dialCode: '+49' },
			{ name: 'Ghana', code: 'GH', dialCode: '+233' },
			{ name: 'Gibraltar', code: 'GI', dialCode: '+350' },
			{ name: 'Greece', code: 'GR', dialCode: '+30' },
			{ name: 'Greenland', code: 'GL', dialCode: '+299' },
			{ name: 'Grenada', code: 'GD', dialCode: '+1-473' },
			{ name: 'Guam', code: 'GU', dialCode: '+1-671' },
			{ name: 'Guatemala', code: 'GT', dialCode: '+502' },
			{ name: 'Guernsey', code: 'GG', dialCode: '+44-1481' },
			{ name: 'Guinea', code: 'GN', dialCode: '+224' },
			{ name: 'Guinea-Bissau', code: 'GW', dialCode: '+245' },
			{ name: 'Guyana', code: 'GY', dialCode: '+592' },
			{ name: 'Haiti', code: 'HT', dialCode: '+509' },
			{ name: 'Honduras', code: 'HN', dialCode: '+504' },
			{ name: 'Hong Kong', code: 'HK', dialCode: '+852' },
			{ name: 'Hungary', code: 'HU', dialCode: '+36' },
			{ name: 'Iceland', code: 'IS', dialCode: '+354' },
			{ name: 'India', code: 'IN', dialCode: '+91' },
			{ name: 'Indonesia', code: 'ID', dialCode: '+62' },
			{ name: 'Iran', code: 'IR', dialCode: '+98' },
			{ name: 'Iraq', code: 'IQ', dialCode: '+964' },
			{ name: 'Ireland', code: 'IE', dialCode: '+353' },
			{ name: 'Isle of Man', code: 'IM', dialCode: '+44-1624' },
			{ name: 'Israel', code: 'IL', dialCode: '+972' },
			{ name: 'Italy', code: 'IT', dialCode: '+39' },
			{ name: 'Ivory Coast', code: 'CI', dialCode: '+225' },
			{ name: 'Jamaica', code: 'JM', dialCode: '+1-876' },
			{ name: 'Japan', code: 'JP', dialCode: '+81' },
			{ name: 'Jersey', code: 'JE', dialCode: '+44-1534' },
			{ name: 'Jordan', code: 'JO', dialCode: '+962' },
			{ name: 'Kazakhstan', code: 'KZ', dialCode: '+7' },
			{ name: 'Kenya', code: 'KE', dialCode: '+254' },
			{ name: 'Kiribati', code: 'KI', dialCode: '+686' },
			{ name: 'Kosovo', code: 'XK', dialCode: '+383' },
			{ name: 'Kuwait', code: 'KW', dialCode: '+965' },
			{ name: 'Kyrgyzstan', code: 'KG', dialCode: '+996' },
			{ name: 'Laos', code: 'LA', dialCode: '+856' },
			{ name: 'Latvia', code: 'LV', dialCode: '+371' },
			{ name: 'Lebanon', code: 'LB', dialCode: '+961' },
			{ name: 'Lesotho', code: 'LS', dialCode: '+266' },
			{ name: 'Liberia', code: 'LR', dialCode: '+231' },
			{ name: 'Libya', code: 'LY', dialCode: '+218' },
			{ name: 'Liechtenstein', code: 'LI', dialCode: '+423' },
			{ name: 'Lithuania', code: 'LT', dialCode: '+370' },
			{ name: 'Luxembourg', code: 'LU', dialCode: '+352' },
			{ name: 'Macau', code: 'MO', dialCode: '+853' },
			{ name: 'Macedonia', code: 'MK', dialCode: '+389' },
			{ name: 'Madagascar', code: 'MG', dialCode: '+261' },
			{ name: 'Malawi', code: 'MW', dialCode: '+265' },
			{ name: 'Malaysia', code: 'MY', dialCode: '+60' },
			{ name: 'Maldives', code: 'MV', dialCode: '+960' },
			{ name: 'Mali', code: 'ML', dialCode: '+223' },
			{ name: 'Malta', code: 'MT', dialCode: '+356' },
			{ name: 'Marshall Islands', code: 'MH', dialCode: '+692' },
			{ name: 'Mauritania', code: 'MR', dialCode: '+222' },
			{ name: 'Mauritius', code: 'MU', dialCode: '+230' },
			{ name: 'Mayotte', code: 'YT', dialCode: '+262' },
			{ name: 'Mexico', code: 'MX', dialCode: '+52' },
			{ name: 'Micronesia', code: 'FM', dialCode: '+691' },
			{ name: 'Moldova', code: 'MD', dialCode: '+373' },
			{ name: 'Monaco', code: 'MC', dialCode: '+377' },
			{ name: 'Mongolia', code: 'MN', dialCode: '+976' },
			{ name: 'Montenegro', code: 'ME', dialCode: '+382' },
			{ name: 'Montserrat', code: 'MS', dialCode: '+1-664' },
			{ name: 'Morocco', code: 'MA', dialCode: '+212' },
			{ name: 'Mozambique', code: 'MZ', dialCode: '+258' },
			{ name: 'Myanmar', code: 'MM', dialCode: '+95' },
			{ name: 'Namibia', code: 'NA', dialCode: '+264' },
			{ name: 'Nauru', code: 'NR', dialCode: '+674' },
			{ name: 'Nepal', code: 'NP', dialCode: '+977' },
			{ name: 'Netherlands', code: 'NL', dialCode: '+31' },
			{ name: 'Netherlands Antilles', code: 'AN', dialCode: '+599' },
			{ name: 'New Caledonia', code: 'NC', dialCode: '+687' },
			{ name: 'New Zealand', code: 'NZ', dialCode: '+64' },
			{ name: 'Nicaragua', code: 'NI', dialCode: '+505' },
			{ name: 'Niger', code: 'NE', dialCode: '+227' },
			{ name: 'Nigeria', code: 'NG', dialCode: '+234' },
			{ name: 'Niue', code: 'NU', dialCode: '+683' },
			{ name: 'North Korea', code: 'KP', dialCode: '+850' },
			{ name: 'Northern Mariana Islands', code: 'MP', dialCode: '+1-670' },
			{ name: 'Norway', code: 'NO', dialCode: '+47' },
			{ name: 'Oman', code: 'OM', dialCode: '+968' },
			{ name: 'Pakistan', code: 'PK', dialCode: '+92' },
			{ name: 'Palau', code: 'PW', dialCode: '+680' },
			{ name: 'Palestine', code: 'PS', dialCode: '+970' },
			{ name: 'Panama', code: 'PA', dialCode: '+507' },
			{ name: 'Papua New Guinea', code: 'PG', dialCode: '+675' },
			{ name: 'Paraguay', code: 'PY', dialCode: '+595' },
			{ name: 'Peru', code: 'PE', dialCode: '+51' },
			{ name: 'Philippines', code: 'PH', dialCode: '+63' },
			{ name: 'Pitcairn', code: 'PN', dialCode: '+64' },
			{ name: 'Poland', code: 'PL', dialCode: '+48' },
			{ name: 'Portugal', code: 'PT', dialCode: '+351' },
			{ name: 'Puerto Rico', code: 'PR', dialCode: '+1-787, +1-939' },
			{ name: 'Qatar', code: 'QA', dialCode: '+974' },
			{ name: 'Republic of the Congo', code: 'CG', dialCode: '+242' },
			{ name: 'Reunion', code: 'RE', dialCode: '+262' },
			{ name: 'Romania', code: 'RO', dialCode: '+40' },
			{ name: 'Russia', code: 'RU', dialCode: '+7' },
			{ name: 'Rwanda', code: 'RW', dialCode: '+250' },
			{ name: 'Saint Barthelemy', code: 'BL', dialCode: '+590' },
			{ name: 'Saint Helena', code: 'SH', dialCode: '+290' },
			{ name: 'Saint Kitts and Nevis', code: 'KN', dialCode: '+1-869' },
			{ name: 'Saint Lucia', code: 'LC', dialCode: '+1-758' },
			{ name: 'Saint Martin', code: 'MF', dialCode: '+590' },
			{ name: 'Saint Pierre and Miquelon', code: 'PM', dialCode: '+508' },
			{ name: 'Saint Vincent and the Grenadines', code: 'VC', dialCode: '+1-784' },
			{ name: 'Samoa', code: 'WS', dialCode: '+685' },
			{ name: 'San Marino', code: 'SM', dialCode: '+378' },
			{ name: 'Sao Tome and Principe', code: 'ST', dialCode: '+239' },
			{ name: 'Saudi Arabia', code: 'SA', dialCode: '+966' },
			{ name: 'Senegal', code: 'SN', dialCode: '+221' },
			{ name: 'Serbia', code: 'RS', dialCode: '+381' },
			{ name: 'Seychelles', code: 'SC', dialCode: '+248' },
			{ name: 'Sierra Leone', code: 'SL', dialCode: '+232' },
			{ name: 'Singapore', code: 'SG', dialCode: '+65' },
			{ name: 'Sint Maarten', code: 'SX', dialCode: '+1-721' },
			{ name: 'Slovakia', code: 'SK', dialCode: '+421' },
			{ name: 'Slovenia', code: 'SI', dialCode: '+386' },
			{ name: 'Solomon Islands', code: 'SB', dialCode: '+677' },
			{ name: 'Somalia', code: 'SO', dialCode: '+252' },
			{ name: 'South Africa', code: 'ZA', dialCode: '+27' },
			{ name: 'South Korea', code: 'KR', dialCode: '+82' },
			{ name: 'South Sudan', code: 'SS', dialCode: '+211' },
			{ name: 'Spain', code: 'ES', dialCode: '+34' },
			{ name: 'Sri Lanka', code: 'LK', dialCode: '+94' },
			{ name: 'Sudan', code: 'SD', dialCode: '+249' },
			{ name: 'Suriname', code: 'SR', dialCode: '+597' },
			{ name: 'Svalbard and Jan Mayen', code: 'SJ', dialCode: '+47' },
			{ name: 'Swaziland', code: 'SZ', dialCode: '+268' },
			{ name: 'Sweden', code: 'SE', dialCode: '+46' },
			{ name: 'Switzerland', code: 'CH', dialCode: '+41' },
			{ name: 'Syria', code: 'SY', dialCode: '+963' },
			{ name: 'Taiwan', code: 'TW', dialCode: '+886' },
			{ name: 'Tajikistan', code: 'TJ', dialCode: '+992' },
			{ name: 'Tanzania', code: 'TZ', dialCode: '+255' },
			{ name: 'Thailand', code: 'TH', dialCode: '+66' },
			{ name: 'Togo', code: 'TG', dialCode: '+228' },
			{ name: 'Tokelau', code: 'TK', dialCode: '+690' },
			{ name: 'Tonga', code: 'TO', dialCode: '+676' },
			{ name: 'Trinidad and Tobago', code: 'TT', dialCode: '+1-868' },
			{ name: 'Tunisia', code: 'TN', dialCode: '+216' },
			{ name: 'Turkey', code: 'TR', dialCode: '+90' },
			{ name: 'Turkmenistan', code: 'TM', dialCode: '+993' },
			{ name: 'Turks and Caicos Islands', code: 'TC', dialCode: '+1-649' },
			{ name: 'Tuvalu', code: 'TV', dialCode: '+688' },
			{ name: 'U.S. Virgin Islands', code: 'VI', dialCode: '+1-340' },
			{ name: 'Uganda', code: 'UG', dialCode: '+256' },
			{ name: 'Ukraine', code: 'UA', dialCode: '+380' },
			{ name: 'United Arab Emirates', code: 'AE', dialCode: '+971' },
			{ name: 'United Kingdom', code: 'GB', dialCode: '+44' },
			{ name: 'United States', code: 'US', dialCode: '+1' },
			{ name: 'Uruguay', code: 'UY', dialCode: '+598' },
			{ name: 'Uzbekistan', code: 'UZ', dialCode: '+998' },
			{ name: 'Vanuatu', code: 'VU', dialCode: '+678' },
			{ name: 'Vatican', code: 'VA', dialCode: '+379' },
			{ name: 'Venezuela', code: 'VE', dialCode: '+58' },
			{ name: 'Vietnam', code: 'VN', dialCode: '+84' },
			{ name: 'Wallis and Futuna', code: 'WF', dialCode: '+681' },
			{ name: 'Western Sahara', code: 'EH', dialCode: '+212' },
			{ name: 'Yemen', code: 'YE', dialCode: '+967' },
			{ name: 'Zambia', code: 'ZM', dialCode: '+260' },
			{ name: 'Zimbabwe', code: 'ZW', dialCode: '+263' }
		];

		    // Populate the country code dropdown with both code and dial code
				var countryCodeDropdown = $('#country-code');
				$.each(countryCodes, function(i, country) {
					var optionText = country.name + ' (' + country.code + ' ' + country.dialCode + ')';
					countryCodeDropdown.append($('<option>').text(optionText).attr('value', country.code + '|' + country.dialCode));
				});

				// Event binding for country code and phone input
				$('#country-code, #phone1').on('change keyup', function() {
					var countryCode = $('#country-code').val().split('|');
					var code = countryCode[0];
					var dialCode = countryCode[1];
					var phoneNumber = $('#phone1').val();
					var sanitizedPhoneNumber = phoneNumber.replace(/\D/g, ''); // Remove non-numeric characters
					$('#phone').val(code + ' ' + dialCode + ' ' + sanitizedPhoneNumber);
				});

				// Validate input when the user types
				$('#phone1').on("keyup", function() {
					var sanitizedValue = $(this).val().replace(/\D/g, ''); // Remove non-numeric characters

					// Update input value with sanitized value
					$(this).val(sanitizedValue);

					// Check if the input contains any non-numeric characters
					if ($(this).val() !== sanitizedValue) {
						return;
					}

					// Check if the input length is more than 10
					if (sanitizedValue.length > 10) {
						$('#phone-error').show(); // Display error message
					} else {
						$('#phone-error').hide(); // Hide error message
					}
				});
			});

			function configureDropDownLists(countryElement, visaElement) {
					// Logic to configure the dropdown lists based on the selected country
				}

				function validateForm() {
					console.log("Form validation triggered.");

					// Get form field values
					var name = document.forms["get-insurance__form"]["name"].value;
					var email = document.forms["get-insurance__form"]["email"].value;
					var countryCode = document.forms["get-insurance__form"]["country-code"].value;
					var phone = document.forms["get-insurance__form"]["phone1"].value;
					var age = document.forms["get-insurance__form"]["age"].value;
					var qualification = document.forms["get-insurance__form"]["qualification"].value;
					var city = document.forms["get-insurance__form"]["city"].value;
					var experience = document.forms["get-insurance__form"]["experience"].value;
					var country = document.forms["get-insurance__form"]["country"].value;
					var visa = document.forms["get-insurance__form"]["visa"].value;
					var consultation = document.forms["get-insurance__form"]["consultation"].value;
					var branch = document.forms["get-insurance__form"]["branch"].value;

					console.log("Form fields retrieved.");

					// Get the error message
					var phoneError = document.getElementById("phone-error");

					// Check if any field is empty
					if (
						name === "" || 
						email === "" || 
						countryCode === "" || 
						phone === "" || 
						age === "" || 
						qualification === "" || 
						city === "" || 
						experience === "" || 
						country === "" || 
						visa === "" || 
						consultation === "" || 
						branch === ""
					) {
						alert("All fields are required.");
						return false; // Prevent form submission
					}

					// Check if the input length is more than 10
					if (phone.length > 10) {
						phoneError.style.display = "block"; // Display error message
						return false; // Prevent form submission
					} else {
						phoneError.style.display = "none"; // Hide error message
					}

					return true; // Form is valid, allow submission
				}

