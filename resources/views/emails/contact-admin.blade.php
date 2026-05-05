<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Submission</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f3f4f6; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #f3f4f6; padding: 30px 10px;">
        <tr>
            <td align="center">
                <table width="600" border="0" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                    <tr>
                        <td style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 35px 40px; text-align: left;">
                            <h2 style="color: #ffffff; margin: 0; font-size: 24px; font-weight: 700;">Dreamclone</h2>
                            <p style="color: #38bdf8; margin: 5px 0 0 0; font-size: 14px; font-weight: 500; text-transform: uppercase; letter-spacing: 1px;">New Web Contact Submission</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 40px;">
                            <p style="color: #334155; font-size: 16px; margin-top: 0;">Hello Admin,</p>
                            <p style="color: #475569; font-size: 15px; line-height: 1.6;">You have received a new general inquiry message from the website contact page:</p>

                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-top: 25px; margin-bottom: 25px; border-collapse: collapse;">
                                <tr>
                                    <td width="30%" style="padding: 12px 10px; border-bottom: 1px solid #f1f5f9; color: #64748b; font-size: 13px; font-weight: 600; text-transform: uppercase;">Client Name</td>
                                    <td style="padding: 12px 10px; border-bottom: 1px solid #f1f5f9; color: #0f172a; font-size: 15px; font-weight: 500;">{{ $formData['name'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 10px; border-bottom: 1px solid #f1f5f9; color: #64748b; font-size: 13px; font-weight: 600; text-transform: uppercase;">Email Address</td>
                                    <td style="padding: 12px 10px; border-bottom: 1px solid #f1f5f9; color: #2563eb; font-size: 15px; font-weight: 500;"><a href="mailto:{{ $formData['email'] }}" style="color:#2563eb; text-decoration:none;">{{ $formData['email'] }}</a></td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 10px; border-bottom: 1px solid #f1f5f9; color: #64748b; font-size: 13px; font-weight: 600; text-transform: uppercase;">Phone Number</td>
                                    <td style="padding: 12px 10px; border-bottom: 1px solid #f1f5f9; color: #0f172a; font-size: 15px; font-weight: 500;">{{ $formData['phone'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 10px; border-bottom: 1px solid #f1f5f9; color: #64748b; font-size: 13px; font-weight: 600; text-transform: uppercase;">Subject</td>
                                    <td style="padding: 12px 10px; border-bottom: 1px solid #f1f5f9; color: #0f172a; font-size: 15px; font-weight: 600;">{{ $formData['subject'] }}</td>
                                </tr>
                            </table>

                            <div style="background-color: #f8fafc; border-left: 4px solid #1e293b; padding: 20px; border-radius: 0 8px 8px 0;">
                                <h4 style="margin: 0 0 8px 0; color: #334155; font-size: 14px; font-weight: 600; text-transform: uppercase;">Message Content:</h4>
                                <p style="margin: 0; color: #475569; font-size: 14px; line-height: 1.6; white-space: pre-line;">{{ $formData['description'] }}</p>
                            </div>

                            <div style="margin-top: 35px; text-align: center;">
                                <a href="mailto:{{ $formData['email'] }}?subject=Re:%20Dreamclone%20Inquiry%20-%20{{ urlencode($formData['subject']) }}" style="background-color: #1e293b; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-size: 15px; font-weight: 600; text-decoration: none; display: inline-block;">Reply to Client</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #f8fafc; padding: 25px 40px; text-align: center; border-top: 1px solid #f1f5f9; color: #94a3b8; font-size: 12px;">
                            &copy; {{ date('Y') }} Dreamclone. All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
