using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace CurrencyConverterStatic
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(textBox1.Text))
            {
                MessageBox.Show("Number is null");
            }
            else
            {
                double a, b;
                a = double.Parse(this.textBox1.Text);

                if(comboBox1.SelectedItem == comboBox2.SelectedItem)
                {
                    b = a;
                    label1.Text = b.ToString();
                }
                else if(comboBox1.SelectedItem=="Rupiah" && comboBox2.SelectedItem=="Dolar")
                {
                    b = a * 0.000069;
                    label1.Text = b.ToString();
                }
                else if (comboBox1.SelectedItem == "Rupiah" && comboBox2.SelectedItem == "Yen")
                {
                    b = a * 0.0076;
                    label1.Text = b.ToString();
                }
                else if (comboBox1.SelectedItem == "Dolar" && comboBox2.SelectedItem == "Yen")
                {
                    b = a * 109.72;
                    label1.Text = b.ToString();
                }
                else if (comboBox1.SelectedItem == "Dolar" && comboBox2.SelectedItem == "Rupiah")
                {
                    b = a * 14462.55;
                    label1.Text = b.ToString();
                }
                else if (comboBox1.SelectedItem == "Yen" && comboBox2.SelectedItem == "Rupiah")
                {
                    b = a * 131.57;
                    label1.Text = b.ToString();
                }
                else if (comboBox1.SelectedItem == "Yen" && comboBox2.SelectedItem == "Dolar")
                {
                    b = a * 0.0091;
                    label1.Text = b.ToString();
                }
            }
        }
    }
}
