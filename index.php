<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Steam Community Use Case & Flow Analysis</title>
	</head>
	<body>
		<header>
			<center> <!-- center is deprecated, but I want it to look pretty and don't want to bother with css now. -->
				<h1>Hypothetical Persona, Use Case, & Guide Creation Interaction Flow</h1>
			</center>
		</header>
		<br>
		<center>
			<h2>
				Persona
			</h2>
					Name: Sara Krace
				<br><br>
					Username: Dogs-vs-Pirates
				<br><br>
					Age:28
				<br><br>
					Occupation: Airline Pilot
				<br><br>
					Technology:
					<ul>
					<li>Gaming Desktop - Windows 10</li>
					<li>Lightweight Laptop - Windows 10</li>
					<li>Smartphone (Palm Pre) - WebOS</li>
					</ul>
					Needs: Frequently travels making gaming difficult due to technology performance constraints. Enjoys interacting with, and creating content for, various games' communities.
				<br><br>
					Goals: Create useful content for gaming communities.
				<br><br>
			<h3>Use Case</h3>
					Sara wants to help the other players of the video games she plays by creating informative and easy to understand guides. She is technologically literate, but does not know how to code or create a website. She needs an easy to use GUI solution to creating/hosting/sharing guides for her favorite games.
			<br><br>
			<h4>Interaction Flow</h4>
		</center>
				<ol>
					<li>Sara opens Steam application (inputs username/password if not already logged in)</li>
					<li>
						Steam application presents user's pre-selected home page.
					</li>
					<li>Sara clicks on "community" button.</li>
					<li>Steam application displays community hub home page with customized lists based upon the user's recently viewed hubs and recently played games.</li>
					<li>Sara searches for the game hub the guide is intended for or navigates to desired game hub via recently played/recently view hubs quick links.</li>
					<li>Steam application displays game hub page.</li>
					<li>
						Sara clicks on the "Guides" button.
					</li>
					<li>
						Steam appplication displays "Guides" page for previously selected game hub.
					</li>
					<li>
						Sara clicks on the "Create Guide" button.
					</li>
					<li>Steam application shows "Basic Guide Information" page.
					</li>
					<li>
						Sara inputs a title for her guide in the provided text field, clicks the "browse" button to open a file browser and select a branding image for her guide, writes a brief description of her guide in the provided text field, clicks on "category" check boxes corresponding to the categories she wishes her guide to be listed under, selects the "language" check box for the language she will write in, checks box certifying she is the original creator of the guide, and clicks "save and continue" button.
					</li>
					<li>
						Steam uploads and stores all text and image data input by Sara. Steam application displays "guide contents" section.
					</li>
					<li>
						Sara clicks on "browse" button under the "images" section to open a fie browser and select all the images she wished to upload in order to use them in her guide.
					</li>
					<li>
						Steam stores image data uploaded by Sara.
					</li>
					<li>
						Sara clicks on the "add a section" button under "guide contents".
					</li>
					<li>
						steam application dynamically updates "guide contents" section with new section.
					</li>
					<li>
						Sara clicks on the "edit this section" button.
					</li>
					<li>
						Sara inputs the section title in the provided text field then inputs the text contents of this section in the provided text field. She uses markup similar to HTML in order to format her text. She also selects (from the images/screenshots/videos sidebar) any images she would like to include in this section. After clicking on an image she selects the desired size and alignment of her image.
					</li>
					<li>
						Steam application inserts markup code that will display the selected image with desired size/position when the guide is viewed outsite the editor.
					</li>
					<li>
						Sara clicks on the preview button.
					</li>
					<li>
						Steam application displays the section as it will appear to any viewers of the guide.
					</li>
					<li>
						Sara clicks the "save" button.
					</li>
					<li>
							Steam commits changes to Sara's guide.
					</li>
					<li>
						Sara clicks on "guide contents" button.
					</li>
					<li>
						Steam application displays "guide contents" page.
					</li>
					<li>
						Sara/steam repeat previous steps until all desired sections have been added to the guide.
					</li>
					<li>
						Sara adds any friends she desires to grant editing access to the guide via the "add a contributor" button.
					</li>
					<li>
						Steam updates list of user accounts with editting permissions for the particular guide.
					</li>
					<li>
						Sara clicks on the "preview guide" button.
					</li>
					<li>
						Steam application displays preview of guide as it will appear to viewers of the guide.
					</li>
					<li>
						After confirming the guide will appear as expected to viewers, Sara clicks the "publish guide" button.
					</li>
					<li>
						Steam adds the guide to the list of available guides displayed on the particular game hub's guide page.
					</li>
				</ol>
			<br><br><br>
				<h5>Steam Community Conceptual Model: Entities &amp Attributes.</h5>
			<ul>
				<li>
					Profile
						<ul>
							<li>profileId (primary)</li>
							<li>profileAccountEmail</li>
							<li>profileAccountPhone</li>
						</ul>
				</li>
				<li>
					Guide
						<ul>
							<li>guideId (Primary)</li>
							<li>guideOwnerId (Foreign)</li>
							<li>guideLanguage</li>
							<li>guideCatagory</li>
							<li>guideContent</li>
							<li>guideCreateDate</li>
							<li>guideModifyDate</li>
						</ul>
				</li>
				<li>
					guideProfile
						<ul>
							<li>guideProfileProfileId (Foreign)</li>
							<li>guideProfileGuideId (Foreign)</li>
						</ul>
				</li>
			</ul>
	</body>
</html>