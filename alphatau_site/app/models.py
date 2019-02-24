from django.db import models

class PledgeClass(models.Model):
    letters = models.CharField(max_length=15) # Ex. Omicron
    name = models.CharField(max_length=25) # Ex. Olympians
    semester = models.CharField(max_length=15) # Ex. Spring 2016
    is_annex = models.BooleanField(default=False)

class Brother(models.Model):
    # Brotherhood info
    firstname = models.CharField(max_length=30)
    lastname = models.CharField(max_length=30)
    linename = models.CharField(max_length=30)
    number = models.PositiveIntegerField()
    pledgeclass = models.ForeignKey('PledgeClass', related_name='class_brothers', on_delete=models.CASCADE)
    big_brother = models.ForeignKey('Brother', related_name='little_brothers', on_delete=models.SET_NULL, blank=True, null=True)
    # Personal info (optional)
    # picture = models.ImageField(blank=True, null=True) # Need to install Pillow
    email = models.EmailField(blank=True, null=True)
    birthday = models.DateField(blank=True, null=True)
    job = models.CharField(max_length=50, blank=True, null=True) # Ex. Software Engineer
    company = models.CharField(max_length=50, blank=True, null=True) # Ex. Facebook
    linkedin = models.URLField(blank=True, null=True)