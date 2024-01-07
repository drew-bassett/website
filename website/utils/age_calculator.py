from datetime import datetime

def calculate_age(birthday):
    today = datetime.now()
    delta = today - birthday

    # Calculate years and months
    years = delta.days // 365
    months = (delta.days % 365) // 30

    return years, months