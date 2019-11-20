const express = require('express');
const bodyParser = require('body-parser');
const exphbs = require('express-handlebars');
const path = require('path');
const nodemailer = require('nodemailer');
const Joi = require('joi');

const app = express();

// // View engine setup
// app.engine('handlebars', exphbs());
// app.set('view engine', 'handlebars');

app.engine('hbs', exphbs({extname: 'hbs', defaultLayout: 'layout', layoutsDir: __dirname + '/views/layouts/'}));
app.set('views', path.join(__dirname, './views'));
app.set('view engine', 'hbs');

// Static folder
app.use('/public', express.static(path.join(__dirname, 'public')));

// Body Parser Middleware
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

app.get('/', (req, res) => {
  res.render('contact');
});

app.post('/send', (req, res) => {

	//	Walidation by @hapi/joi
	const schema = {
		name: Joi.string().regex(/^[a-zA-Z0-9 .!?"-]+$/).min(3).max(30).required().trim(),
		email: Joi.string().email({ minDomainAtoms: 2 }),
		subject: Joi.string().regex(/^[a-zA-Z0-9 .!?"-]+$/).min(3).max(30).trim(),
		message: Joi.string()
	};

	const result = Joi.validate(req.body, schema);

	if (result.error) {
		// res.status(400).send(result.error.details[0].message);
		res.render('contact', {msg: result.error.details[0].message});
	} else {
		
	//create a message
	const output = `
		<p>You have a new contact request</p>
		<h3>Contact details</h3>
		<ul>
			<li>Name: ${req.body.name}</li>
			<li>E-mail: ${req.body.email}</li>
			<li>Subject: ${req.body.subject}</li>
		</ul>
		<h4>Message:</h4>
		<p>${req.body.message}</p>
	`;
	
	console.log(output);

	// //sending a message
 //  // create reusable transporter object using the default SMTP transport
  let transporter = nodemailer.createTransport({
    host: 'aleksandergorecki.com',
    port: 587,
    secure: false, // true for 465, false for other ports
    auth: {
        user: 'contact@aleksandergorecki.com', // generated ethereal user
        pass: 'SCub_or_2MZel'  // generated ethereal password
    },
    tls:{
      rejectUnauthorized:false
    }	// tylko dla localhosta
  });

  // setup email data with unicode symbols
  let mailOptions = {
      from: '"Nodemailer Contact" <contact@aleksandergorecki.com>', // sender address
      to: 'aleksandergorecki80@gmail.com', // list of receivers
      subject: 'Node Contact Request', // Subject line
      text: 'Hello world?', // plain text body
      html: output // html body
  };

  // send mail with defined transport object
  transporter.sendMail(mailOptions, (error, info) => {
      if (error) {
          return console.log(error);
      }
      console.log('Message sent: %s', info.messageId);   
      console.log('Preview URL: %s', nodemailer.getTestMessageUrl(info));

      res.render('contact', {msg:'Email has been sent'});
  });
	}


});

app.listen(process.env.PORT || 8000, ()=> console.log('Server started...'));