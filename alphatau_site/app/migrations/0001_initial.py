# Generated by Django 2.1 on 2019-02-24 06:51

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Brother',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('firstname', models.CharField(max_length=30)),
                ('lastname', models.CharField(max_length=30)),
                ('linename', models.CharField(max_length=30)),
                ('number', models.PositiveIntegerField()),
                ('email', models.EmailField(blank=True, max_length=254, null=True)),
                ('birthday', models.DateField(blank=True, null=True)),
                ('job', models.CharField(blank=True, max_length=50, null=True)),
                ('company', models.CharField(blank=True, max_length=50, null=True)),
                ('linkedin', models.URLField(blank=True, null=True)),
                ('big_brother', models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.SET_NULL, related_name='little_brothers', to='app.Brother')),
            ],
        ),
        migrations.CreateModel(
            name='PledgeClass',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('letters', models.CharField(max_length=15)),
                ('name', models.CharField(max_length=25)),
                ('semester', models.CharField(max_length=15)),
                ('is_annex', models.BooleanField(default=False)),
            ],
        ),
        migrations.AddField(
            model_name='brother',
            name='pledgeclass',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='class_brothers', to='app.PledgeClass'),
        ),
    ]
