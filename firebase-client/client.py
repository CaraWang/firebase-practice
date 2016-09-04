from flask import Flask, url_for
from flask import render_template

class CustomFlask(Flask):
    jinja_options = Flask.jinja_options.copy()
    jinja_options.update(dict(
        block_start_string='{%',
        block_end_string='%}',
        variable_start_string='[[',
        variable_end_string=']]',
        comment_start_string='{#',
        comment_end_string='#}',
    ))

app = CustomFlask(__name__)

@app.route("/firebase")
def message():
    return render_template('firebase.html')

