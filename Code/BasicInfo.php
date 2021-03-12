<?php
/*  Collector
    A program for running experiments on the web
    Copyright 2012-2014 Mikey Garcia & Nate Kornell
 */
    require 'initiateCollector.php';
	
    $title = 'Basic Information';
    require $_codeF . 'Header.php';
?>
<div class="main-contain">
	<h2 class="textcenter">Basic Information</h2>

	<form name="Demographics" class="collector-form collector-form-extra" action="BasicInfoData.php" method="post" autocomplete="off">

		<div class="field">
			<legend>What is your gender?</legend>
			<input type="radio"   value="Male"     class="radio"    name="Gender"    />    Male     <br />
			<input type="radio"   value="Female"   class="radio"    name="Gender"    />    Female   <br />
			<input type="radio"   value="Other"   class="radio"    name="Gender"    />    Other   <br />
		</div>

		<div class="field">
			<p>What is your age?</p>
			<input type="text" value="" name="Age" autocomplete="off" class="forceNumeric" />
		</div>

		<div class="field">
			<p>Which of the following best describes your highest achieved education level?</p>
			<select name="Education">
				<option selected="selected">Select Level</option>
				<option>    Some High School                            </option>
				<option>    High School Graduate                        </option>
				<option>    Some college, no degree                     </option>
				<option>    Associates degree                           </option>
				<option>    Bachelors degree                            </option>
				<option>    Graduate degree (Masters, Doctorate, etc.)  </option>
			</select>
		</div>

	
		<div class="field">
			<p>Which of the following best describes your ethnicity?</p>
			<select name="Race">
				<option selected="selected">Select Level</option>
				<option>	American Indian/Alaskan Native		</option>
				<option>	Asian/Pacific Islander				</option>
				<option>	Black           					</option>
				<option>	White                       		</option>
				<option>	Hispanic/Latinx						</option>
				<option>	Other/unknwon						</option>
			</select>
		</div>

		<div class="field">
			<p>Do you speak English fluently?</p>
			<input    type="radio"    name="English"    value="Fluent"        />    Yes, I am fluent in English     <br />
			<input    type="radio"    name="English"    value="Non-Fluent"    />    No, I am not fluent in English  <br />
		</div>
        
		<div class="field">
			<p>What age did you start learning English? If English is your first language, please put 0.</p>
			<input type="text" value="" name="AgeEnglish" autocomplete="off"/>
		</div>

		<div class="field">
			<p>What is your country of residence?</p>
			<input type="text" value="" name="Country" size="30"    autocomplete="off" />
		</div>
		         <section class="radioButtons">
            <h3>Have you previously worked or do you currently work in any capacity in Uma Tauber's lab (AKA the Metacognition, Memory, and Aging Lab) at TCU?</h3>
            <label><input name="Uma" type="radio" value="Yes"   required/>Yes</label>
            <label><input name="Uma" type="radio" value="No"    required/>No</label>
        </section>
        
        <section class="radioButtons">
            <h3> Have you previously taken or are you currently taking the TCU Course "Memory and Cognition"?</h3>
            <label><input name="MemandCog" type="radio" value="Yes"   required/>Yes</label>
            <label><input name="MemandCog" type="radio" value="No"    required/>No</label>
        </section>
        
                
        <section class="radioButtons">
            <h3> Have you previously taken or are you currently taking the TCU Course "Experimental Psychology: Cognition"?</h3>
            <label><input name="CogLab" type="radio" value="Yes"   required/>Yes</label>
            <label><input name="CogLab" type="radio" value="No"    required/>No</label>
        </section>
        
        
     		<!-- ## SET ##  Use this area to provide the equivalent of an informed consent form -->
		<div class="consent">
			<h3 class="consent-legend">Informed Consent:</h3>
			<h3 class="consent-legend textcenter"></h3>
			<textarea rows="20" cols="45" wrap="physical">
			
		Texas Christian University
Fort Worth, Texas 

CONSENT TO PARTICIPATE IN RESEARCH

Title of Research:  Memory, Attention, and Learning

Principal Investigator: Dr. Mary B. Hargis, Ph.D.

You are invited to participate in a research study. In order to participate, you must be an undergraduate student at TCU aged 18 or older, you must be fluent in English, and you must have normal or corrected-to-normal hearing and vision. Taking part in this research project is voluntary.

A summary of things you should know:
•	This is a research study involving human subjects that has been approved by TCU Institutional Review Board.
•	The purpose of this research is to better understand how well people can direct attention to information that they want to later remember. We are interested what information you remember, as well as how accurately you can predict how well you will remember this information.  This session will last between 1-3 hours, depending on what you had been previously informed to expect. There are few risks or discomforts, except possibly mild boredom.  
•	You will not directly benefit from your participation in the research.  However, the results of the research may contribute to a better understanding of memory, attention, motivation, and learning.
•	Taking part in this research project is voluntary. You don’t have to participate and you can stop at any time.
Please take time to read this entire form and ask questions before deciding whether to take part in this research project.

What is the purpose of the research?  
The purpose of the study is to learn more about memory, attention, and motivation, how we remember different types of information, and how one can predict memory performance.

How many people will participate in this study?  
If you decide to be in this study, you will be one of approximately 200 participants in this research study.

What is my involvement for participating in this study?  
If you choose to participate in this study, we would ask you to remember various types of information. For example, will study common words, word pairs, short statements, and words paired with numbers and then later recall or recognize the words and numbers. In some cases, participants will make judgments about how likely they will remember the information. We may also ask you to provide some basic demographic information about yourself, such as your age, your gender, and your ethnicity.

We expect your participation to take about 1-3 hours. At the end of the study you may be asked to return 1-2 weeks later to participate in additional studies. We will not share your individual performance on these tasks with you; your data will be anonymized and combined with many other participants’ data before any conclusions are drawn. 

How long am I expected to be in this study for and how much of my time is required?
If you agree to participate, the session will last approximately 1-3 hours. You will not be obligated to participate in any future sessions. However, you may be asked at the end of this session to participate in additional studies. This participation would also be voluntary.

What are the risks to me for participating in this study and how will they be minimized?
We don’t believe there are any risks from participating in this research that are different for risk that you encounter in everyday life, except possibly mild boredom.

What are the benefits for participating in this study?
Although you will not directly benefit from being in this study, others might benefit because the results of the research may contribute to a better understanding of memory, attention, motivation, and learning.

Will I be compensated for participating in this study?
You will receive course credit per hour for your participation. If you choose to withdraw from the study, you will be compensated for the time you have spent (minimum 1 credit). You will not be responsible for any costs to participate in this study.

What is an alternative procedure(s) that I can choose instead of participating in this study?
There are no known alternatives available to you other than not taking part in this study.  However, any significant new findings developed during the course of the research which may relate to your willingness to continue participation will be provided to you.

How will my confidentiality be protected?  We plan to publish the results of this study. Efforts will be made to limit the use and disclosure of your personal information, including research study records, to people who have a need to review this information. We cannot promise complete secrecy. Your records may be reviewed by authorized University or other individuals who will be bound by the same provisions of confidentiality

What will happen to the information collected about me after the study is over?

We will keep your research data to use for future research. Your name and other information that can directly identify you will be kept secure and stored separately from the research data collected as part of the project 

We may share your research data with other investigators without asking for your consent again, but it will not contain information that could directly identify you. If we share your research data in a public repository, it will be stripped of any identifying information.

Is my participation voluntary?
It is totally up to you to decide to be in this research study. Participating in this study is voluntary. Even if you decide to be part of the study now, you may change your mind and stop at any time. You do not have to answer any questions you do not want to answer. If you decide to withdraw before this study is completed, tell the researcher that you wish to withdraw and data collection will cease. 

Who should I contact if I have questions regarding the study?
You can contact Dr. Mary Hargis at m.hargis@tcu.edu or 817-257-7410 with any questions that you have about the study.

Who should I contact if I have concerns regarding my rights as a study participant? 
Dr. Dru Riddle, Chair, TCU Institutional Review Board, (817) 257-6811, d.riddle@tcu.edu; or Ms. Lorrie Branson, JD, TCU Research Integrity Officer, (817) 257-4266, l.branson@tcu.edu.


By signing this document, you are agreeing to be in this study. Make sure you understand what the study is about before you sign. You can contact the researchers to be given a copy of this document for your records. A copy also will be kept with the study records.  If you have any questions about the study after you sign this document, you can contact the study team using the information provided above.

I understand what the study is about and my questions so far have been answered. I agree to take part in this study. 
</textarea>
</section>
		
	
        
        
        <section>
            <label>
                <h3>I am age 18 or older.</h3>
                <select name="Age18" required class="wide collectorInput">
                    <option value="" default selected>Select one</option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </label>
        </section>
        
        <section>
            <label>
                <h3>I have read the consent form above.</h3>
                <select name="Read" required class="wide collectorInput">
                    <option value="" default selected>Select one</option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </label>
        </section>
        
        <section>
            <label>
                <h3>I want to participate in this research and continue with the experiment.</h3>
                <select name="Consent" required class="wide collectorInput">
                    <option value="" default selected>Select one</option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </label>
        </section>
        
                <section>
            <label>
                <h3>If you answered "No" to ANY of the last three questions, submit this page and then close the browser window.</h3>
            
                </select>
            </label>
        </section>

		</textarea>
		</div>

		<div class="consent textcenter">
			<input class="button" type="submit" value="Submit Basic Info" />
		</div>
	</form>
</div>
<?php
    require $_codeF . 'Footer.php';