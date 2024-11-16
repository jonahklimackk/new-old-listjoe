@include('members.layout.header')
@include('members.layout.menu')
@include('members.layout.sidebar-vda')
<div class="wrapper">
                    <div class="description">
    <h1>Submit ticket</h1>
    <br/><br/>
When submitting a ticket concerning a purchase please include your <br/> transaction ID
and/or payza email address. <br/><br/>I usually answer tickets much sooner, however please allow 24 hours before sending<br/>
a new ticket. If you do not recieve an email response you can check the status of your<br/> ticket by visiting <a href="http://support.listjoe.com#check" target="_blank">http://support.listjoe.com</a> and enter your contact email address for a<br/> list of your current tickets.
    <br/><br/>
    <form method="post" id="ticketForm" method="post" class="form" action="/members/submit-ticket">
        @csrf
        <table>
            <tr>
                <td style="width: 90px;">
                    <b>Subject:</b>
                </td>
                <td>
                    <input type="text" name="subject" style="width: 400px;"/>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: middle;">
                    <b>Message:</b>
                </td>
                <td>
                    <textarea name="message" style="width: 400px;height: 130px;"></textarea>
                </td>
            </tr>
        </table>
        <br/><br/>
        <div class="blue_button" onclick="$('#ticketForm').submit()">Submit</div>
    </form>
</div>                </div>

                            </div>
        </div>
        
@include('members.layout.footer')
