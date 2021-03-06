<?php $this->load->view('header'); ?>
<link href="/static/hong.css" type="text/css" rel="stylesheet"/>
<form id="zycp_fx_form" method="post">
<div class="content">
    <div class="fx_title">
        <h1>中职生职业规划分析问卷（丹阳中专）</h1>
    </div>
    <div class="fx_name">姓名：<?php echo @$member['uname'];?></div>
    <div class="fx_time f_left">时间：<?php echo date('Y-m-d H:i',$fx['uptime']);?></div>
    <div class="clear question">
		<p style="font-size: 18px;color: #984806;font-weight: bold;">导语：此问卷为职业规划老师为学生提供帮助的重要依据。请在放松状态下，按次序、尽可能详细地回答。</p>
<?php 
    $qustion=array(
        1=>"关于学业和未来的职业生涯，你感觉特别困惑及需要帮助的是什么？你的压力主要来自哪些方面？",
        2=>"你认为自己是个怎样的一个人？请评价一下自己最大的特点。身边的人通常怎么评价你。",
        3=>"你的优势和劣势分别有哪些？(比如：你究竟有什么才干和天赋? 什么东西你能做得最出色?与你所认识的人相比，你的长处、高人一筹的是什么?方方面面的优势都要想到)",
        4=>"当初你是如何选择现在这个专业和学校的？",
        5=>"你对现在的学习状况满意吗？为什么？是否有偏科情况？",
        6=>"请列举你感兴趣的学科和不感兴趣的学科，理由是什么？",
        7=>"你对什么特别感兴趣？你的激情体现在哪一方面?做什么事情使您内心激动向往，非常有冲劲去完成，而且干起来不仅不觉得累，反而感到其乐无穷? 一定有，请仔细想，然后写下来：",
        8=>"你有没有特别想成为哪类人？请描述一下你想要的生活。",
        9=>"你的职业目标是什么？你认为理想的职业应具备哪几个要素？",
        10=>"请描述你理想中的管理者是怎样的？好的公司是怎样的？",
        11=>"你参加过什么样的培训课程，是如何选择的？你想参加此类培训目的是什么？除此之外，你还想学习哪些知识和技能？",
        12=>"请仔细描述一下在以往的经历中给你带来极大成就感或是挫败感的一些事情，数量不限。",
        13=>"你觉得阻碍你发展的最大因素是什么？还有哪些因素/人会影响到你的职业选择/发展？",
        14=>"你的父母和家人都是从事什么职业的，他们对你的职业选择/发展有何意见或是支持？",
        15=>"请回想一下，你的童年，你的人生经历，有什么与众不同之处？是否给你带来什么特别的洞察力、经验和能力？对你的职业发展有什么影响。",
        16=>"在以往的经历中有哪些人（可以是普通人或是特别杰出的人）或事情对你影响比较大，产生什么样的影响？对你的职业发展有什么影响。",
        17=>"你认为自己的身体状况如何？是否有过什么大的疾病对自己产生不利影响？",
        18=>"为了做好本次咨询，你认为除了以上所述内容，还有什么需要补充的吗？还有哪些具体的需求要得到满足？"
    );
    for ($i=1; $i <= count($qustion); $i++) { 
        echo $i.'、'.$qustion[$i];
        echo '<br/><p>'.$fx['q'.$i].'</p>';
    }
?>
</div>
</form>

<?php $this->load->view('footer'); ?>